<?php
 return array (
  'name' => 'people',
  'label' => 'Пользователи',
  '_id' => 'people5d29ca32a62ea',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'fio',
      'label' => '',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    1 => 
    array (
      'name' => 'emails',
      'label' => 'E-mail адрес',
      'type' => 'repeater',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'field' => 
        array (
          'type' => 'set',
          'label' => 'Почтовый ящик',
          'options' => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'text',
                'name' => 'email',
                'label' => 'E-mail',
              ),
              1 => 
              array (
                'type' => 'text',
                'name' => 'password',
                'label' => 'Пароль',
              ),
            ),
          ),
        ),
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'vpn',
      'label' => 'VPN',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1563019826,
  '_modified' => 1563024155,
  'color' => '',
  'acl' => 
  array (
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'accounts.svg',
  'group' => 'Nable',
);