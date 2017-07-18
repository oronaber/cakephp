<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?= $this->Html->link('Cakephp Oronaber', ['controller' => 'Users', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= $this->Html->link('Listar Usuarios', ['controller' => 'Users', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Agregar Usuario', ['controller' => 'Users', 'action' => 'add']) ?></li>
              </ul>
            </li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>