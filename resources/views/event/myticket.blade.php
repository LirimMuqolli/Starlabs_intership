<x-app-layout>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.esm.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>

    
    <br>
    <br>
    <div class="my-5" id="photo">
        <button class="px-4 py-2  bg-rose-500 text-white/80 rounded-lg hover:bg-rose-600 hover:text-white duration-300"
            id="download">
            <i class="fa-solid fa-ticket fa-lg fa-fw mr-2"></i>
            Screenshot
        </button>
        <button type="button"
            class="px-4 py-2 bg-rose-500 text-white/80 rounded-lg hover:bg-rose-600 hover:text-white duration-300"
            onclick="window.print()"> <i class="fa-solid fa-file-pdf"></i> Print this page</button>
        <div class="max-w-[900px] mx-auto pt-1 pb-12 px-4 lg:pb-16">
            @forelse ($tickets as $ticket)
                @for ($i = 0; $i < $ticket->quantity; $i++)
                    <x-ticket :ticket="$ticket" />
                    
                @endfor
            @empty
                <strong><span>No tickets found <a href="{{ route('event.show') }}">Go Buy</a></span></strong>
            @endforelse
        </div>
    </div>

</x-app-layout>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#download").click(function() {
            screenshot();
        });
    });

    function screenshot() {
        html2canvas(document.getElementById("photo")).then(function(canvas) {
            downloadImage(canvas.toDataURL(), "UsersInformation.png");
        });
    }

    function downloadImage(uri, filename) {
        var link = document.createElement('a');
        if (typeof link.download !== 'string') {
            window.open(uri);
        } else {
            link.href = uri;
            link.download = filename;
            accountForFirefox(clickLink, link);
        }
    }

    function clickLink(link) {
        link.click();
    }

    function accountForFirefox(click) {
        var link = arguments[1];
        document.body.appendChild(link);
        click(link);
        document.body.removeChild(link);
    }
</script>
