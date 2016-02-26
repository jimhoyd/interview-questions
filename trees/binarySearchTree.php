<?php
	
class Node {
	public $left;
	public $right;
	public $data;
	
	public function __construct($data) {
		$this->data = $data;
		$this->left = null;
		$this->right = null;
	}
	
}

class BinarySearchTree {
	
	public $root;
	
	public function __construct() {
		$this->root = null;
	}
	
	public function add($data) {		
		if(!$this->root) {
			$this->root = new Node($data);
		} else {
			$current = $this->root;
			while(true) {
				if($data < $current->data) {
					if($current->left) {
						$current = $current->left;
					} else {
						$current->left = new Node($data);
						break;
					}				
				} else if($data > $current->data) {
					if($current->right) {
						$current = $current->right;						 
					} else {
						$current->right = new Node($data);
						break;
					}
				} else {
					break;
				}				
			}
		}
	}
	
	public function inorder($node=null) {
		if(!$node) {
			$node = $this->root;
		}
		
		if($node->left) {
			$this->inorder($node->left);
		}

		echo $node->data.PHP_EOL;

		if($node->right) {
			$this->inorder($node->right);			
		}		
	}
	
	public function preorder($node=null) {
		if(!$node) {
			$node = $this->root;
		}

		echo $node->data.PHP_EOL;

		if($node->left) {
			$this->inorder($node->left);
		}

		if($node->right) {
			$this->inorder($node->right);			
		}			
	}
	
	public function postorder($node=null) {
		if(!$node) {
			$node = $this->root;
		}
		
		if($node->left) {
			$this->inorder($node->left);
		}

		if($node->right) {
			$this->inorder($node->right);			
		}			

		echo $node->data.PHP_EOL;
		
	}	
	
}

$data = [7, 3, 9, 2, 4, 8, 10];
$tree = new BinarySearchTree();
foreach($data as $value) {
	$tree->add($value);
}

var_dump($tree);

var_dump('in order');
$tree->inorder();

var_dump('pre order');
$tree->preorder();

var_dump('post order');
$tree->postorder();