<?php
    echo $this->Form->input('first_name', ['label' => 'Nombre']);
    echo $this->Form->input('last_name', ['label' => 'Apellido']);
    echo $this->Form->input('email', ['label' => 'Email']);
    echo $this->Form->input('password', ['label' => 'Contraseña', 'value' => '']);
?>