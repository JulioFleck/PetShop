<?php
class Object {
	public function __set($name, $value) {
		if (property_exists ( $this, $name )) {
			$this->$name = $value;
		}
		return $this;
	}
	public function __get($name) {
		return $this->$name;
	}
	public function popula(array $dados) {
		foreach ( $dados as $key => $value ) {
			$this->__set ( $key, $value );
		}
	}
	function toArray() {
		$temp = get_object_vars ( $this );
		
		foreach ( $temp as $key => $value ) {
			if (! isset ( $value ))
				unset ( $temp [$key] );
		}
		
		return $temp;
	}
}