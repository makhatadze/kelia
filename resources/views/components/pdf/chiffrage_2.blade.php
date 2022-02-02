<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- google Font -->
    <!-- My Style -->
    <style>
        @page {
            margin: 0px;
        }

        @font-face {
            font-family: 'sylfaen';
            src: url("{{public_path('fonts/bpg_glaho_sylfaen.ttf')}}") format('truetype');
        }

        *, html {
            font-family: 'sylfaen', sans-serif;
            color: #404040;
        }


        body {
            text-rendering: geometricPrecision;
            font-family: 'sylfaen', sans-serif;
            margin: 0;
        }

        a {
            color: #404040;
            text-decoration: none;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .invoice table {
            margin: 15px;
        }

        .invoice h3 {
            margin-left: 15px;
        }

        .information {
            margin-left: 30px;
            margin-right: 30px;
            border-top: 1px solid #404040;
            color: #404040;
        }

        .information .logo {
            margin: 5px;
        }

        .information table {
            padding: 10px;
        }

        .main-wrapper {
            padding: 30px;
        }


        h1 {
            font-weight: bold;
        }


        .font-sm {
            font-size: 12px;
            line-height: 1.4;
        }

        .mt-1 {
            margin-top: 0.2rem;
        }

        .mr-3 {
            margin-right: 0.6rem;
        }

        .end {
            display: flex;
            justify-content: flex-end;
        }

        .mt-5 {
            margin-top: 20px;
        }

        .font-bold {
            font-weight: bold;
        }


        .column {
            float: left;
            width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .gray-bg {
            padding-top: 10px;
            padding-left: 15px;
            padding-bottom: 15px;
            border-radius: 12px;
            background-color: #F5F5F5;
        }

        .table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .table td, th {
            border-right: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
<div style="position: relative; height: 100vh">
    <div style="padding:30px;">
        <h1 class="font-bold">KELIA</h1>
        <span class="font-sm">9 Rue Anatole De La Forge</span>
        <br>
        <span class="font-sm">75017 Paris</span>
        <br>
        <div class="row">
            <div class="column">
                <span class="font-sm">France</span>
                <br>
                <br>
                <span class="font-sm">Tél: 0650042520</span>
                <br>
                <span class="font-sm">contact@kelia-travaux.com</span>
                <br>
                <span class="font-sm">kelia-travaux.com</span>
            </div>
            <div class="column gray-bg" style="width: 40%;">
                @if($user["address"])
                    <span class="font-sm">{{ $user["address"] }}</span>
                    <br>
                @endif
                @if($user["city"])
                    <span class="font-sm">{{ $user["city"] }}</span>
                    <br>
                @endif
                @if($user["name"])
                    <span class="font-sm">{{ $user["name"] }}</span>
                    <br>
                @endif
                @if($user["mail"])
                    <span class="font-sm">{{ $user["mail"] }}</span>
                    <br>
                @endif
                @if($user["postalCode"])
                    <span class="font-sm">{{ $user["postalCode"] }}</span>
                    <br>
                @endif
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="column">
                <h4 class="font-bold" style="margin-bottom: 0px">Devis n° DEV-2021/11-0013</h4>
                <span class="font-sm">Valable 3 mois</span>
                <br>
                <br>
                <span class="font-sm" style="font-style: italic">
                    Adresse du projet :
                </span>
                <div class="gray-bg" style="width: 60%">
                    <span class="font-sm">10, Rue Jules Ferry</span>
                    <br>
                    <span class="font-sm">91310 Leuville-sur-Orge</span>
                    <br>
                    <span class="font-sm">France</span>
                </div>
            </div>
            <div class="column" style="width: 40%; padding-left: 15px;">
                <br>
                <span class="font-sm">En date du {{\Carbon\Carbon::today()->toDateString()}}</span>
            </div>
        </div>
        <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="column" style="padding-left: 40px">
                <h4 class="font-bold" style="margin-bottom: 0px; font-style: italic">
                    Objet du devis - Installation vmc simple faux
                </h4>
            </div>
        </div>

        <table class="table">
            <tr>
                <th><strong>N°</strong></th>
                <th><strong>Désignation</strong></th>
                <th><strong>Qté</strong></th>
                <th><strong>PU HT</strong></th>
                <th><strong>Total HT</strong></th>
            </tr>
                @foreach($answers as $key => $answer)
                    @if($answer['total'])
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td>{{ $answer['body'] }}</td>
                        <td>{{ $answer['size'] }}</td>
                        <td>{{ number_format($answer['price']) }} €</td>
                        <td>{{ number_format($answer['total']) }} €</td>
                    </tr>
                @endif
                @endforeach
            <tr>
                <td></td>
                <td>
                    <h3>DESCRIPTION</h3>
                    <span>
                        Du T2 au T7. Consommation énergétique : 21 W Th-C. Piquages : 3 x Ø80mm pour sanitaire
                    + 1 x Ø125mm pour cuisine + 1 x Ø125mm pour rejet toiture.
                    3 bouches fournies (2 x Ø80mm + 1 x Ø125mm) + 1 commut PV/GV. Double hygrostat inclus pour le passage automatique en grande vitesse.
                    </span>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="row" style="margin-right: 30px; margin-bottom: 10px;">
        <div style="float: right; width: 30%; padding-top:5px; padding-bottom: 5px;">
            <div class="row font-bold">
                <div class="column">
                    Total
                </div>
                <div style="float:right;">
                    {{ number_format($total, 2) }} €
                </div>
            </div>
        </div>
    </div>
    <div class="row font-sm" style="margin-left: 30px; margin-right: 30px;">
        Paiement en espèces, par chèque ou par virement bancaire.
        <br>
        Le montant peut être révisé en fonction du temps réel passé sur le chantier et de l’ajustement des fournitures et/ou de leurs prix.
    </div>
    <div class="information" style="position: absolute; bottom: 0;">
        <table width="100%">
            <tr>
                <td style="padding-left:60px; text-align: center; width: 80%;">
                    KELIA - 9 Rue Anatole De La Forge, 75017 Paris, France - Téléphone : 0650042520 - e-mail :
                    contact@kelia-travaux.com Page 1 / 2 SIRET : 89811121600013 - TVA : FR65898111216 - Code APE : 4120A
                    - Assurance : BPCE IARD N° 175092796 T 001
                    IBAN : FR7610107002810081507174367
                </td>
                <td align="right" style="width: 20%;">
                    Page 1 / 2
                </td>
            </tr>
        </table>
    </div>
</div>
<div style="position: relative; height: 100vh">
    <div>
        <h5 style="text-align: right; margin-right: 4px">DEV-2021/11-0013</h5>
        <div class="mt-5 row">
            <div class="column">
                <div>
                    <h5 class="font-bold" style="text-align: center; margin-bottom: 0px">
                        Le client
                    </h5>
                    <span style="font-size: 12px; text-align: center; display: block">
                        Mention manuscrite et datée : <br>
                        « Bon pour accord. »
                    </span>
                    <div style="text-align: center">
                        <div style="display: inline-block; border: 1px solid gray; width: 150px; height: 70px; border-radius: 12px">

                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div>
                    <h5 class="font-bold" style="text-align: center; margin-bottom: 0; margin-top: 3.34rem;">KELIA</h5>
                    <div style="text-align: center">
                        <div style="display: inline-block; border: 1px solid gray; width: 150px; height: 70px; border-radius: 12px">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="information" style="position: absolute; bottom: 0;">
        <table width="100%">
            <tr>
                <td style="padding-left:60px; text-align: center; width: 80%;">
                    KELIA - 9 Rue Anatole De La Forge, 75017 Paris, France - Téléphone : 0650042520 - e-mail :
                    contact@kelia-travaux.com Page 1 / 2 SIRET : 89811121600013 - TVA : FR65898111216 - Code APE : 4120A
                    - Assurance : BPCE IARD N° 175092796 T 001
                    IBAN : FR7610107002810081507174367
                </td>
                <td align="right" style="width: 20%;">
                    Page 2 / 2
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>