<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute kabul edilmeli.',
    'accepted_if' => ':attribute, :other :value bolanda kabul edilmeli.',
    'active_url' => ':attribute hakykatdan hem bar bolan URL bolmaly.',
    'after' => ':attribute senesi :date senesinden soň bolmaly.',
    'after_or_equal' => ':attribute senesi :date senesine deň ýa-da soň bolmaly.',
    'alpha' => ':attribute diňe harplardan durmaly.',
    'alpha_dash' => ':attribute diňe harplardan, sanlardan, tirelerden we aşaky çyzyklardan durmaly.',
    'alpha_num' => ':attribute diňe harplardan we sanlardan durmaly.',
    'array' => ':attribute sanaw bolmaly.',
    'ascii' => ':attribute diňe bir-baitly harp-symsymlar we nyşanlar bolmaly.',
    'before' => ':attribute senesi :date senesinden öň bolmaly.',
    'before_or_equal' => ':attribute senesi :date senesine deň ýa-da öň bolmaly.',
    'between' => [
        'array' => ':attribute sanawy :min bilen :max arasynda elementlerden durmaly.',
        'file' => ':attribute faýlyň göwrümi :min bilen :max kilobait arasynda bolmaly.',
        'numeric' => ':attribute :min bilen :max arasynda bolmaly.',
        'string' => ':attribute :min bilen :max aralygynda simwollardan durmaly.',
    ],
    'boolean' => ':attribute hakyky ýa-da ýalan bolmaly.',
    'can' => ':attribute nädogry baha öz içine alýar.',
    'confirmed' => ':attribute tassyklamasy deň däl.',
    'contains' => ':attribute zerur bahany öz içine almaýar.',
    'current_password' => 'Parol nädogry.',
    'date' => ':attribute dogry senä bolmaly.',
    'date_equals' => ':attribute :date senesine deň bolmaly.',
    'date_format' => ':attribute :format formatyna laýyk gelmeli.',
    'decimal' => ':attribute :decimal onluk sanlary öz içine almaly.',
    'declined' => ':attribute kabul edilmemeli.',
    'declined_if' => ':attribute, :other :value bolanda kabul edilmemeli.',
    'different' => ':attribute bilen :other tapawutly bolmaly.',
    'digits' => ':attribute :digits sanlardan durmaly.',
    'digits_between' => ':attribute :min bilen :max aralygynda sanlardan durmaly.',
    'dimensions' => ':attribute surat ölçegi kabul ederliksiz.',
    'distinct' => ':attribute gaýtalanýan baha bar.',
    'doesnt_end_with' => ':attribute aşakdakylaryň biri bilen gutarmaly däl: :values.',
    'doesnt_start_with' => ':attribute aşakdakylaryň biri bilen başlamaly däl: :values.',
    'email' => ':attribute dogry e-poçta adresi bolmaly.',
    'ends_with' => ':attribute aşakdakylaryň biri bilen gutarmaly: :values.',
    'enum' => ':attribute üçin saýlanan baha kabul ederliksiz.',
    'exists' => ':attribute üçin saýlanan baha kabul ederliksiz.',
    'extensions' => ':attribute faýly aşakdaky giňeltmelerden birini öz içine almaly: :values.',
    'file' => ':attribute faýl bolmaly.',
    'filled' => ':attribute baha öz içine almaly.',
    'gt' => [
        'array' => ':attribute sanawy :value elementden köp bolmaly.',
        'file' => ':attribute faýlyň göwrümi :value kilobaitdan uly bolmaly.',
        'numeric' => ':attribute :value-den uly bolmaly.',
        'string' => ':attribute :value simwoldan köp bolmaly.',
    ],
    'gte' => [
        'array' => ':attribute sanawy :value ýa-da ondan köp elementden durmaly.',
        'file' => ':attribute faýlyň göwrümi :value kilobaitdan uly ýa-da deň bolmaly.',
        'numeric' => ':attribute :value-den uly ýa-da deň bolmaly.',
        'string' => ':attribute :value simwoldan uly ýa-da deň bolmaly.',
    ],
    'hex_color' => ':attribute dogry on altylyk reňk bolmaly.',
    'image' => ':attribute surat bolmaly.',
    'in' => ':attribute üçin saýlanan baha kabul ederliksiz.',
    'in_array' => ':attribute :other içinde bolmaly.',
    'integer' => ':attribute tutuş san bolmaly.',
    'ip' => ':attribute dogry IP adresi bolmaly.',
    'ipv4' => ':attribute dogry IPv4 adresi bolmaly.',
    'ipv6' => ':attribute dogry IPv6 adresi bolmaly.',
    'json' => ':attribute dogry JSON setir bolmaly.',
    'list' => ':attribute sanaw bolmaly.',
    'lowercase' => ':attribute kiçi harplardan durmaly.',
    'lt' => [
        'array' => ':attribute sanawy :value elementden az bolmaly.',
        'file' => ':attribute faýlyň göwrümi :value kilobaitdan az bolmaly.',
        'numeric' => ':attribute :value-den az bolmaly.',
        'string' => ':attribute :value simwoldan az bolmaly.',
    ],
    'lte' => [
        'array' => ':attribute sanawy :value elementden köp bolmaly däl.',
        'file' => ':attribute faýlyň göwrümi :value kilobaitdan az ýa-da deň bolmaly.',
        'numeric' => ':attribute :value-den az ýa-da deň bolmaly.',
        'string' => ':attribute :value simwoldan az ýa-da deň bolmaly.',
    ],
    'mac_address' => ':attribute dogry MAC adresi bolmaly.',
    'max' => [
        'array' => ':attribute sanawy :max elementden köp bolmaly däl.',
        'file' => ':attribute faýlyň göwrümi :max kilobaitdan köp bolmaly däl.',
        'numeric' => ':attribute :max-den köp bolmaly däl.',
        'string' => ':attribute :max simwoldan köp bolmaly däl.',
    ],
    'max_digits' => ':attribute :max sanlardan köp bolmaly däl.',
    'mimes' => ':attribute faýly aşakdakylaryň biri bolmaly: :values.',
    'mimetypes' => ':attribute faýly aşakdakylaryň biri bolmaly: :values.',
    'min' => [
        'array' => ':attribute sanawy azyndan :min elementden durmaly.',
        'file' => ':attribute faýlyň göwrümi azyndan :min kilobait bolmaly.',
        'numeric' => ':attribute azyndan :min bolmaly.',
        'string' => ':attribute azyndan :min simwoldan durmaly.',
    ],
    'min_digits' => ':attribute azyndan :min sanlardan durmaly.',
    'missing' => ':attribute bolmaly däl.',
    'missing_if' => ':attribute :other :value bolanda bolmaly däl.',
    'missing_unless' => ':attribute :other :value bolmadyk ýagdaýynda bolmaly däl.',
    'missing_with' => ':attribute :values bar bolanda bolmaly däl.',
    'missing_with_all' => ':attribute :values bar bolanda bolmaly däl.',
    'multiple_of' => ':attribute :value köpügi bolmaly.',
    'not_in' => ':attribute üçin saýlanan baha kabul ederliksiz.',
    'not_regex' => ':attribute formaty kabul ederliksiz.',
    'numeric' => ':attribute san bolmaly.',
    'password' => [
        'letters' => ':attribute azyndan bir harp bolmaly.',
        'mixed' => ':attribute azyndan bir uly we bir kiçi harp bolmaly.',
        'numbers' => ':attribute azyndan bir san bolmaly.',
        'symbols' => ':attribute azyndan bir nyşan bolmaly.',
        'uncompromised' => ':attribute maglumatlaryň syzyndysynda tapyldy. Başga :attribute saýlaň.',
    ],
    'present' => ':attribute bar bolmaly.',
    'present_if' => ':attribute :other :value bolanda bar bolmaly.',
    'present_unless' => ':attribute :other :value bolmadyk ýagdaýynda bar bolmaly.',



        'present_with' => ':attribute :values bar bolanda bar bolmaly.',
    'present_with_all' => ':attribute :values bar bolanda bar bolmaly.',
    'prohibited' => ':attribute gadagan.',
    'prohibited_if' => ':attribute :other :value bolanda gadagan.',
    'prohibited_unless' => ':attribute :other :values bolmadyk ýagdaýynda gadagan.',
    'prohibits' => ':attribute :other-yň bolmagyna rugsat bermeýär.',
    'regex' => ':attribute formaty nädogry.',
    'required' => ':attribute doldurylmaly.',
    'required_array_keys' => ':attribute :values ýazgylary öz içine almaly.',
    'required_if' => ':attribute :other :value bolanda doldurylmaly.',
    'required_if_accepted' => ':attribute :other kabul edilende doldurylmaly.',
    'required_if_declined' => ':attribute :other kabul edilmedik ýagdaýynda doldurylmaly.',

    'required_unless' => ':attribute :other :values arasynda bolmadyk ýagdaýynda doldurylmaly.',
    'required_with' => ':values bar bolanda :attribute doldurylmaly.',
    'required_with_all' => ':values-leriň hemmesi bar bolanda :attribute doldurylmaly.',
    'required_without' => ':values ýok bolanda :attribute doldurylmaly.',
    'required_without_all' => ':values-leriň hiç biri ýok bolanda :attribute doldurylmaly.',
    'same' => ':attribute :other bilen deň bolmaly.',
    'size' => [
        'array' => ':attribute :size elementden durmaly.',
        'file' => ':attribute faýlyň göwrümi :size kilobait bolmaly.',
        'numeric' => ':attribute :size deň bolmaly.',
        'string' => ':attribute :size simwoldan durmaly.',
    ],
    'starts_with' => ':attribute aşakdakylaryň biri bilen başlamaly: :values.',
    'string' => ':attribute setir bolmaly.',
    'timezone' => ':attribute dogry wagtyň zolagy bolmaly.',
    'unique' => ':attribute eýýäm ulanyldy.',
    'uploaded' => ':attribute ýüklenip bilinmedi.',
    'uppercase' => ':attribute uly harplardan durmaly.',
    'url' => ':attribute dogry URL bolmaly.',
    'ulid' => ':attribute dogry ULID bolmaly.',
    'uuid' => ':attribute dogry UUID bolmaly.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
