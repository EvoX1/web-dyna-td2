function div($message){
    return '<span>'.$message.'</span>';
}
function element($titre, $contenu, $niveau=1){
  return "<h$niveau>$titre</h$niveau>
          <div>$contenu</div>";
}
function parseElements($elements){
  $resp='';
  foreach ($elements as $elm) {
    $resp.=element($elm['titre'],$elm['contenu'],$elm['niveau']??1);
  }
  return $resp;
}
function createHtmlTable($nbLignes,$nbColonnes){
  ?>
  <table border='1'>