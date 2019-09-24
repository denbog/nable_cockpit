<?php
 return array (
  'name' => 'comp',
  'label' => 'Компьютеры',
  '_id' => 'comp5d29c37c76f2d',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'title',
      'label' => 'PC NAME',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'localize' => false,
      'options' => 
      array (
        'slug' => true,
      ),
      'width' => '1-2',
      'lst' => true,
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'type',
      'label' => 'Тип устройства',
      'type' => 'select',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'cls' => '',
        'options' => 
        array (
          'n' => 'Ноутбук',
          'w' => 'Рабочая станция',
          's' => 'Сервер',
          'm' => 'Моноблок',
          'o' => 'Другое',
        ),
        'default' => 'n',
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'place',
      'label' => 'Место',
      'type' => 'collectionlink',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'link' => 'place',
        'display' => 'name',
        'multiple' => false,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'owner',
      'label' => 'Пользователь',
      'type' => 'collectionlink',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'link' => 'people',
        'display' => 'fio',
        'multiple' => false,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    4 => 
    array (
      'name' => 'zabbix',
      'label' => 'Zabbix',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    5 => 
    array (
      'name' => 'office2016',
      'label' => 'Office 2016',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-2',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1563018108,
  '_modified' => 1563026821,
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
  'group' => 'Nable',
);