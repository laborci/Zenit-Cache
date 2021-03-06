<?php namespace Zenit\Bundle\Cache\Component;


use Zenit\Bundle\Cache\Interfaces\MemoryCacheInterface;
class MemoryCache implements MemoryCacheInterface{

	private $cache = [];

	public function add($object, $id) { $this->cache[$id] = $object; }
	public function get($id) { return array_key_exists($id, $this->cache) ? $this->cache[$id] : null; }
	public function delete($id) { unset($this->cache[$id]); }
	public function clear(){$this->cache = [];}

}