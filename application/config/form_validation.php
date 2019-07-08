<?php

$config['auth'] = [
  [
    'field'   => 'username',
    'label'   => 'Username',
    'rules'   => 'required|trim',
  ],
  [
    'field'   => 'password',
    'label'   => 'Password',
    'rules'   => 'required|trim'
  ]
];

$config['config/sekolah'] = [
  [
    'field'   => 'nama_sekolah',
    'label'   => 'Nama sekolah',
    'rules'   => 'required|trim'
  ],
  [
    'field'   => 'nds',
    'label'   => 'NSS',
    'rules'   => 'required'
  ],
  [
    'field'   => 'npsn',
    'label'   => 'NPSN',
    'rules'   => 'required'
  ],
  [
    'field'   => 'alamat_sekolah',
    'label'   => 'Alamat Sekolah',
    'rules'   => 'required'
  ],
  
  [
    'field'   => 'kode_pos',
    'label'   => 'Kode Pos',
    'rules'   => 'required'
  ],
  [
    'field'   => 'telp_sekolah',
    'label'   => 'No telp',
    'rules'   => 'required'
  ],
  [
    'field'   => 'kecamatan',
    'label'   => 'Kecamatan',
    'rules'   => 'required'
  ],
  [
    'field'   => 'kelurahan',
    'label'   => 'Kelurahan',
    'rules'   => 'required'
  ],
  [
    'field'   => 'kota',
    'label'   => 'Kabupaten/kota',
    'rules'   => 'required'
  ],
  [
    'field'   => 'provinsi',
    'label'   => 'Provinsi',
    'rules'   => 'required'
  ],
  [
    'field'   => 'website',
    'label'   => 'Website',
    'rules'   => 'required'
  ],
  [
    'field'   => 'email',
    'label'   => 'Email',
    'rules'   => 'required'
  ]
];