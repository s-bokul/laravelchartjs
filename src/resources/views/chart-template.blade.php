<canvas class="{!! $element !!}" width="{!! $size['width'] !!}" height="{!! $size['height'] !!}">
</canvas>
<script>
    var ctx = document.getElementsByClassName("{!! $element !!}");
    window.{!! $element !!} = new Chart(ctx, {
        type: '{!! $type !!}',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}
        },
        @if(!empty($optionsRaw))
        options: {!! $optionsRaw !!}
                @elseif(!empty($options))
            options: {!! json_encode($options) !!}
    @endif
    });
</script>
