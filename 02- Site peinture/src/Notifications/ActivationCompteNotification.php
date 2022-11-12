<?php


namespace App\Notifications;

// On importe les classes nécessaires à l'envoi d'e-mail et à Twig
use Swift_Message;
use App\Entity\Users;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\SyntaxError;
use Twig\Error\RuntimeError;

class ActivationCompteNotification
{
    /**
     * Propriété contenant le module d'envoi de mail
     *
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * Propriété contenant l'environnement twig
     *
     * @var Environment
     */
    private $renderer;

    /**
     * Constructeur de classe
     * @param Swift_Mailer $mailer
     * @param Environment $renderer
     */
    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    /**
     * Méthode de notification (envoi de mail)
     *
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function notify(Users $user)
    {
        // On construit le mail
        $message = (new Swift_Message('Mon Blog - Activation de votre compte'))
            // Expéditeur
            ->setFrom('no-reply@monblog.fr')
            // Destinataire
            ->setTo($user->getEmail())
            // Corps du message (créé avec twig)
            ->setBody(
                $this->renderer->render(
                    'emails/activation.html.twig',
                    ['token' => $user->getActivationToken()]
                ),
                'text/html'
            );

        // On envoie le mail
        $this->mailer->send($message);
    }
}