<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Command\\DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type'], [0 => 'App\\Form\\AppointmentType', 1 => 'App\\Form\\CustomerType', 2 => 'App\\Form\\PlaceType', 3 => 'App\\Form\\UploadCSVType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 6 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 7 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType', 9 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminBatchFormType', 10 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType', 11 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType', 12 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EasyAdminExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 2 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Guesser\\MissingDoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
