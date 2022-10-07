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
        if ($this->root->value === $element) {
            return $this->root;
        } else {
            while (isset($this->root)) {
                if ($this->root->value == $element) {
                    return $this->root;
                } elseif ($this->root->value > $element && isset($this->root->left)) {
                    $this->root = $this->root->left;
                } elseif (isset($this->root->right)) {
                    $this->root = $this->root->right;
                } else {
                    return null;
                }
            }
        }
    }

    public function delete($element, BinaryTree $tree)
    {
        $newTree = new BinaryTree();
        $bool = true;

            while ($bool === true) {
                if ($tree->root->value === $element) {

                } else {
                    if (isset($tree->root->left) || isset($tree->root->right)) {

                        if ($tree->root->value == $element) {
                            $tree->root->value = $tree->root->right;
                        } elseif ($tree->root->value > $element && isset($tree->root->left)) {
                            $newTree->insert($tree->root->value);
                            $tree->root = $tree->root->left;
                        } elseif (isset($tree->root->right)) {
                            $newTree->insert($tree->root->value);
                            $tree->root = $tree->root->right;
                        } else {
                            return null;
                        }
                    } else {
                        $bool = false;

                    }
                }
            }
        return $newTree;
    }


    public function deleteNode($node)
    {
        if ($node != NULL) {
            if ($node->left == NULL && $node->right == NULL) {
                return NULL;
            }

            $node->left = $this->deleteNode($node->left);
            $node->right = $this->deleteNode($node->right);
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
$tree->insert(4);
$tree->insert(9);
$tree->insert(33);
$tree->insert(15);
$tree->insert(202);
$tree->insert(3);
$tree->insert(13);
$tree->insert(6);

echo "<pre>";
print_r($tree);
echo "<pre/>";

//$tree->root = $tree->deleteAllLeaf($tree->root);

//$searchResult = $tree->searchNode(3);
//
//echo 'Результат пошуку :';
//echo "<pre>";
//print_r($searchResult);
//echo "<pre/>";


echo 'Результат видалення :';
$tree->delete(202, $tree);
echo "<pre>";
print_r($tree);
echo "<pre/>";
