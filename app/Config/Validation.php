<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $siswa = [
        //validasi data tidak ada yang sama
        'nis' => 'required|is_unique[tbl_siswa.nis]|min_length[5]',
        'nama' => 'required|max_length[20]',
        'email' => 'required|valid_email',
        'foto_siswa' => 'uploaded[foto_siswa]|mime_in[foto_siswa,image/jpg,image/png,image/jpeg]|max_size[foto_siswa,1000]'
    ];

    public $siswa_errors = [
        'nis' => [
            'required' => 'Nis wajin diisi',
            'is_unique' => 'Nis sudah ada, input yang lain',
            'min_lenght' => 'Minimal 4 karakter',

        ],
        'nama' => [
            'required' => 'Nis wajin diisi',
            'max_length' => 'maksimal 20 karakter',

        ],
        'email' => [
            'required' => 'NiS wajin diisi',
            'valid_email' => 'Input dengan format email',

        ],
        'foto_siswa' => [
            'uploaded' => 'Gambar wajib diisi',
            'mime_in' => 'wajib format type PNG,JPG,JPEG',
            'min_length' => 'Ukuran maximal upload 2MB',

        ],
    ];
}
