<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCPDF;

class CvController extends Controller
{

    public function index () {
        return view('front-end.pages.freelance.cv.cv');
    }
    public function create (Request $request) {

           // Créer une nouvelle instance
           $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

           // Définissez les paramètres du document PDF
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('John Doe');
$pdf->SetTitle('Mon CV');
$pdf->SetSubject('Curriculum Vitae');
$pdf->SetKeywords('CV, curriculum vitae, HTML, TCPDF');
// Définissez les marges
$pdf->SetMargins(10, 10, 10);
        // Ajouter une page
        $pdf->AddPage();

        // Définir le contenu du PDF
        $html = '
        <!DOCTYPE html>
<html>
<head>
	<title>Mon CV</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;

		}
		header {
			background-color: #333;
			color: #fff;
			padding: 0px;
			text-align: center;
		}
		h1 {
			font-size: 18px;
			margin-bottom: 10px;
		}
		h2 {
			font-size: 12px;
			margin-bottom: 5px;
		}
		p {
			font-size: 8px;
			margin-bottom: 5px;
		}
		section {
			background-color: #fff;
			padding: 20px;
			margin: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		li {
			margin-bottom: 5px;
		}
		.skills {
			display: flex;
			flex-wrap: wrap;
		}
		.skill {


			padding: 5px 10px;
			border-radius: 5px;
			margin-right: 10px;
			margin-bottom: 10px;
			font-size: 14px;
		}
	</style>
</head>
<body>
	<header>
		<h1>'. $request->nom . ' ' . $request->prenom .'</h1>
		<p>'.$request->titre.'</p>
	</header>

	<section>
		<h2>Expérience professionnelle</h2>

		<ul>
			<li>
				<h3>'.$request->NomEntreprise1 .'</h3>
				<p>'.$request->debut1.' - '.$request->fin1.'</p>
				<p>Description du poste</p>
				<p>'.$request->description1.'</p>
			</li>

			<li>
                <h3>'.$request->NomEntreprise2 .'</h3>
				<p>'.$request->debut2.' - '.$request->fin2.'</p>
				<p>Description du poste</p>
				<p>'.$request->description2.'</p>
			</li>



		</ul>

	</section>

	<section>

		<h2>Formation</h2>

		<ul>
			<li>
				<h3>'.$request->intitule1.'</h3>
				<p>'.$request->NonEcole1.'</p>
				<p>'.$request->obtention1.'</p>
			</li>

			<li>
            <h3>'.$request->intitule2.'</h3>
            <p>'.$request->NonEcole2.'</p>
            <p>'.$request->obtention2.'</p>
			</li>

			<!-- Ajoutez autant de formations que nécessaire -->

		</ul>

    </section>

    <section>

        <h2>Compétences</h2>

        <div class="skills">
            <div class="skill">'.$request->competence1.'</div>
            <div class="skill">'.$request->competence2.'</div>
            <div class="skill">'.$request->competence3.'</div>


            <!-- Ajoutez autant de compétences que nécessaire -->

        </div>

    </section>

</body>

</html>


        ';



      //  $html .= '<p>Nom : ' . $_POST['nom'] . '</p>';
      //  $html .= '<p>Prénom : ' . $_POST['prenom'] . '</p>';

        // Écrire le contenu dans le PDF
        $pdf->writeHTML($html);

        // Enregistrer le fichier PDF
        $pdf->Output('mon_cv.pdf', 'D');
        return redirect()->route('freelance.index');
    }
}
