<?php


public function insertReview( Request $request, EntityManagerInterface $entityManager)
{

if ($request->getMethod() === "POST") {
$email = $request->request->get('title');
$password = $request->request->get('content'); // avec la methode Post la demande de création du user a été envoyée, je recupere les donnees POST

$user = new User(); // instancie une nouvelle classe User

try {
$hashedPassword = $passwordHasher->hashPassword(
$user,
$password
); // j'instancie la classe $passwordHasher

// je lui place les valeurs que je veux (email, password, role)
$user->setEmail($email);
$user->setPassword($hashedPassword);
$user->setRoles(['ROLE_ADMIN']);

//on instancie la classe entityManager pour ce faire on type EntityManagerInterface et on la placera en parametre ainsi que $EntityManagerInterface
$entityManager->persist($user); // preparation de la requete
//                dd($user);
$entityManager->flush(); // execution de la requete

//                dd($user);

$this->addFlash('success', 'User créé'); //je cree mon message flash

} catch (\Exception $exception) {
// $this->addFlash('error', $exception->getMessage()); il faut éviter de renvoyer le message directement récupéré depuis les erreurs SQL
$this->addFlash('error', 'error');
}
}

return $this->render('admin/page/user/insert_user.html.twig'); // je retourne le formulaire
}