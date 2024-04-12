<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fiche de travail</title>
    <style>
     
	p {margin: 0; padding: 0;}	.ft00{font-size:27px;font-family:BAAAAA+Arial;color:#000000;}
	.ft01{font-size:27px;font-family:CAAAAA+ArialMT;color:#000000;}
	.ft02{font-size:16px;font-family:BAAAAA+Arial;color:#000000;}
	.ft03{font-size:16px;font-family:CAAAAA+ArialMT;color:#000000;}
	.ft04{font-size:15px;font-family:BAAAAA+Arial;color:#000000;}
	.ft05{font-size:15px;font-family:CAAAAA+ArialMT;color:#000000;}
 
    </style>
</head>
<body>
    <div id="page1-div" style="position:relative;height:1262px; padding: 20px;">
        <img width="100px" height="100px" src="assets/images/user.png" alt="background image" style="margin:10px 0px 5px 30px;"/>

        <p style="position:absolute;top:70px;left:331px;white-space:nowrap" class="ft00"><b>FIELD&#160;ORDER</b></p>
                  <p style="position:absolute;top:70px;left:650px;white-space:nowrap" class="ft00"><b>Nº {{$ficheTravail->id}}</b></p>
                  <p style="position:absolute;top:136px;left:29px;white-space:nowrap" class="ft02"><b>ORDER&#160;Nº</b></p>
                  <p style="position:absolute;top:136px;left:133px;white-space:nowrap" class="ft03">{{$ficheTravail->facture->numeroCommande}}</p>
                  <p style="position:absolute;top:136px;left:297px;white-space:nowrap" class="ft02"><b>OWNER&#160;ITEM&#160;</b></p>
                  <p style="position:absolute;top:136px;left:409px;white-space:nowrap" class="ft03">: {{$ficheTravail->ownerItem}}</p>
                  <p style="position:absolute;top:136px;left:559px;white-space:nowrap" class="ft02"><b>DKNV&#160;ITEM&#160;:&#160;</b></p>
                  <p style="position:absolute;top:136px;left:671px;white-space:nowrap" class="ft03">{{$ficheTravail->dknvItem}}</p>
                  <p style="position:absolute;top:179px;left:29px;white-space:nowrap" class="ft02"><b>REQUEST&#160;FOR&#160;:</b></p>
                  <p style="position:absolute;top:218px;left:29px;white-space:nowrap" class="ft02"><b>A)&#160;ALTERATION&#160;:</b> {{$ficheTravail->typeDemande === "ajout" ? "OUI" : ''}}</p>

                  <p style="position:absolute;top:218px;left:297px;white-space:nowrap" class="ft02"><b>B)&#160;NEW&#160;ITEM&#160;:</b> {{$ficheTravail->typeDemande === "modification" ? "OUI" : ''}}</p>
                  <p style="position:absolute;top:218px;left:559px;white-space:nowrap" class="ft02"><b>C)&#160;CANCELATION&#160;:</b> {{ $ficheTravail->typeDemande === "Conselation" ? "OUI"  : '' }}</p>

                  <p style="position:absolute;top:251px;left:29px;white-space:nowrap" class="ft02"><b>ITEM&#160;TITLE&#160;:</b> {{ $ficheTravail->titreElement}}</p>
                  <p style="position:absolute;top:286px;left:29px;white-space:nowrap" class="ft03">{{ $ficheTravail->observation }}</p>

                  <p style="position:absolute;top:954px;left:29px;white-space:nowrap" class="ft02"><b>PRICE&#160;:</b></p>
                  <p style="position:absolute;top:954px;left:112px;white-space:nowrap" class="ft03"> {{ $ficheTravail->prix}} {{ $ficheTravail->facture->devise }}</p>
                  <p style="position:absolute;top:980px;left:39px;white-space:nowrap" class="ft02"><b>DELIVERY&#160;TIME : </b>{{ $ficheTravail->tempLivraison}}</p>
                  <p style="position:absolute;top:999px;left:94px;white-space:nowrap" class="ft02"><b>ADJUST:</b></p>
                  <p style="position:absolute;top:1039px;left:29px;white-space:nowrap" class="ft02"><b>REMARKS: </b>{{ $ficheTravail->remarque}}</p>
                  <p style="position:absolute;top:1077px;left:152px;white-space:nowrap" class="ft04"><b>Project&#160;Manager</b></p>
                  <p style="position:absolute;top:1102px;left:29px;white-space:nowrap" class="ft04"><b>Signature:&#160;</b></p>
                  <p style="position:absolute;top:1129px;left:29px;white-space:nowrap" class="ft04"><b>Date&#160;:</b> {{date('d-m-Y'), strtotime($ficheTravail->dateSignatureProductManager)}}</p>
                  <p style="position:absolute;top:1077px;left:474px;white-space:nowrap" class="ft04"><b>Authorized&#160;by&#160;Owner&#160;Representative&#160;</b></p>
                  <p style="position:absolute;top:1102px;left: 402px;white-space:nowrap" class="ft04"><b>Signature:</b></p>
                  <p style="position:absolute;top:1128px;left: 402px;white-space:nowrap" class="ft04"><b>Date:</b> {{ date('d-m-Y'), strtotime($ficheTravail->dateSignaturePropriétaire)}}</p>
                  <p style="position:absolute;top:1180px;left:257px;white-space:nowrap" class="ft05">Printed&#160;at: {{date('d-m-Y')}}</p>
        </div> 

</body>
</html>