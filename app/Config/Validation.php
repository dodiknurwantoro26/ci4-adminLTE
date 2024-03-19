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
        //validasi data tidak adda yang sama
        'nis' => 'required|is_unique[tbl_siswa.nis]|min_length[5];',
        'nama' => 'required|max_lenght[20]',
        'email' => 'required|valid_email',
        'img_siswa' => 'uploaded[foto_siswa]|mime_in[foto_siswa, img/jpg, img/png, img/10]|max_size[foto_siswa, 2000]'
    ];

    public $siswa_eror = [
        'nis' => [
            'requires' => 'NiS wajin diisi',
            'is_unique' => 'NiS sudah ada, input yang lain',
            'min_lenght' => 'Minimal 4 karakter',

        ],
        'nama' => [
            'requires' => 'NiS wajin diisi',
            'max_lenght' => 'maksimal 20 karakter',

        ],
        'email' => [
            'requires' => 'NiS wajin diisi',
            'valid_email' => 'Input dengan format email',

        ],
        'img_siswa' => [
            'uploaded' => 'wajin diisi',
            'mime_in' => 'wajib format type PNG,JPG,JPEG',
            'min_lenght' => 'Ukuran maximal upload 2MB',

        ],
    ];
}
