<?php

include 'BinaryNode.php';

class BinaryTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty()
    {
        return $this->root === null;
    }

    public function insert($item)
    {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {

            $this->root = $node;
        } else {

            $this->insertNode($node, $this->root);


        }
    }

    protected function insertNode($node, &$subtree)
    {
        if ($subtree === null) {
            $subtree = $node;
        } else {
            if ($node->value > $subtree->value) {

                $this->insertNode($node, $subtree->right);
            } else if ($node->value < $subtree->value) {

                $this->insertNode($node, $subtree->left);
            } else {
            }

        }
    }

    public function traverse()
    {
        $this->root->dump();
    }

    public function searchNode(int $element)
    {
        $l = 1;
        $r = 1;

        if ($this->root->value === $element) {
            $result = $this->root->value . " <= Значення було у корні дерева";
            return $result;
        } else {
            while (isset($this->root)) {

                if ($this->root->value == $element) {
                    if ($l > $r) {
                        $result = $this->root->value . " <= Значення було у лівих гілках на рівні: " . $l;
                        return $result;
                    } else {
                        $result = $this->root->value . " <= Значення було у правих гілках на рівні: " . $r;
                        return $result;
                    }
                }

                if ($this->root->value > $element) {
                    if (isset($this->root->left)) {
                        $this->root = $this->root->left;
                        $l++;
                    } else {
                        $result = 'Значення нема.';
                        return $result;
                    }
                } else {
                    if (isset($this->root->right)) {
                        $this->root = $this->root->right;
                        $r++;
                    } else {
                        $result = 'Значення нема.';
                        return $result;
                    }
                }
            }
        }
    }

    public function deleteAllLeaf($node)
    {
        if ($node != NULL) {
            if ($node->left == NULL && $node->right == NULL) {
                return NULL;
            }

            $node->left = $this->deleteAllLeaf($node->left);
            $node->right = $this->deleteAllLeaf($node->right);
            return $node;
        }
        return NULL;
    }
}

$tree = new BinaryTree();
$tree->insert(10);
$tree->insert(8);
$tree->insert(12);
$tree->insert(1);
$tree->insert(13);
$tree->insert(6);
$tree->insert(4);
$tree->insert(9);
$tree->insert(33);
$tree->insert(15);
$tree->insert(202);
$tree->insert(3);


echo "<pre>";
print_r($tree);
echo "<pre/>";

$tree->root = $tree->deleteAllLeaf($tree->root);
$tree->root = $tree->deleteAllLeaf($tree->root);
$tree->root = $tree->deleteAllLeaf($tree->root);
$tree->root = $tree->deleteAllLeaf($tree->root);
$tree->root = $tree->deleteAllLeaf($tree->root);

echo "<pre>";
print_r($tree);
echo "<pre/>";

//$tree->delete(9);
//echo "<pre>";
//print_r($tree);
//echo "<pre/>";

