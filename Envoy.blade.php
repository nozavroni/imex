@servers(['localhost' => '127.0.0.1'])

@setup

    $now = new DateTime();
    $environment = isset($env) ? $env : "testing";

@endsetup

@include('vendor/autoload.php')

@task('listdir', ['on' => 'localhost'])

    @if ($num)
        echo "{{ $now->format('Ymd') }} {{ $num }}"
    @endif
    ls -la

@endtask