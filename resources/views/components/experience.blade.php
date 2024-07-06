@foreach ($experience as $e)
   
    <h4>{{ $e->position }} at {{ $e->company }}</h4>
    <label>@formatDateFY($e->from) - @formatDateFY($e->to) | {{ $e->location }}</label>
    <p>{{ $e->description }}</p>
    <ul>
        <li>Developed responsive websites, Content Management Systems, and others aimed at stock management and real-time shipment tracking systems.</li>
        <li>Worked on integrations with third-party APIs such as checkout platforms -MercadoPago, delivery trackers, Google Analytics, Twitter, Facebook, and WhatsApp; and other e-commerce platforms like WooCommerce.</li>
        <li>Configured work environments, servers, virtual machines, docker, hosting and email accounts.</li>
        <li>Defined and managed backlogs with Jira, GitHub, Microsoft Azure DevOps, and Trello.</li>
        <li>Developments on legacy frameworks mounted on multiple docker containers - Symfony 2 and 3; and different OS - Windows and Ubuntu.</li>
        <li>Technologies: PHP 7+ and 8+; Vanilla JavaScript; ReactJS; Symfony 2.4, 3.4, and 5.2; Laravel 8; Docker; Ubuntu; MySQL;</li>
    </ul>


@endforeach

