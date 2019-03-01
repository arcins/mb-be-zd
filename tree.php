<?php


class Node {
  public $creditsleft;
  public $creditsright;
  public $username;

  public $left;
  public $right;

  public function __construct($username) {
    $this->username = $username;
    $this->creditsleft = 0;
    $this->creditsright = 0;

    // new node have empty leafs
    $this->left = null;
    $this->right = null;
  }

  public function addChild(Node $childLeft, Node $childRight) {
    this->left = $childLeft;
    this->right = $childRight;
  }
}


class BinaryTree {
  public $root = null;

  public function __construct(Node $node) {
    $node->root = $node;
  }

  public traversalTree(Node $node, int $level = 0) {

      if ($node) {
          echo str_repeat('-', $level);
          echo $node->data . '\n';

          if ($node->left)
            $this->traversalTree($node->left, $level + 1);

          if ($node->right)
            $this->traversalTree($node->right, $level + 1);
         }
    }
  }

  public traversalTreeFromDB() {

  }
}


$final = new Node('Final');

$tree = new BinaryTree($final);

$semiFinal1 = new Node('Semi Final 1');
$semiFinal2 = new Node('Semi Final 2');
$quarterFinal1 = new Node('Quarter Final 1');
$quarterFinal2 = new Node('Quarter Final 2');
$quarterFinal3 = new Node('Quarter Final 3');
$quarterFinal4 = new Node('Quarter Final 4');

$semiFinal1->addChild($quarterFinal1, $quarterFinal2);
$semiFinal2->addChild($quarterFinal3, $quarterFinal4);

$final->addChild($semiFinal1, $semiFinal2);

$tree->traversalTree($tree->root);
 ?>
