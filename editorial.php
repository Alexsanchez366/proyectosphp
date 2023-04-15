<?php
class Publicacion {
    public $titulo;
    public $precio;

    public function __construct($titulo, $precio) {
        $this->titulo = $titulo;
        $this->precio = $precio;
    }
}

class Libro extends Publicacion {
    public $num_paginas;

    public function __construct($titulo, $precio, $num_paginas) {
        parent::__construct($titulo, $precio);
        $this->num_paginas = $num_paginas;
    }
}

class Compact extends Publicacion {
    public $tiempo_reproduccion_min;

    public function __construct($titulo, $precio, $tiempo_reproduccion_min) {
        parent::__construct($titulo, $precio);
        $this->tiempo_reproduccion_min = $tiempo_reproduccion_min;
    }
}

?>