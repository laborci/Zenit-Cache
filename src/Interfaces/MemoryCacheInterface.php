<?php
namespace Zenit\Bundle\Cache\Interfaces;

interface MemoryCacheInterface{
	public function add($object, $id);
	public function get($id);
	public function delete($id);
	public function clear();
}
