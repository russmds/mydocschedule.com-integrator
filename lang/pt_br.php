<?php
/**
Copyright 2011-2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Language.php');

class pt_br extends Language
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array
     */
    protected function _LoadDates()
    {
        $dates = array();

        $dates['general_date'] = 'd/m/Y';
        $dates['general_datetime'] = 'd/m/Y H:i:s';
        $dates['schedule_daily'] = 'l, d/m/Y';
        $dates['reservation_email'] = 'd/m/Y @ H:i (e)';
        $dates['res_popup'] = 'd/m/Y H:i';
        $dates['dashboard'] = 'l, m/d/Y H:i';
        $dates['period_time'] = 'H:i';
	$dates['general_date_js'] = 'dd/mm/yy';
	$dates['calendar_time'] = 'h:mmt';
	$dates['calendar_dates'] = 'd/M';

        $this->Dates = $dates;

        return $this->Dates;
    }
    /**
     * @return array
     */
    protected function _LoadStrings()
    {
        $strings = array();

        $strings['FirstName'] = 'Nome';
        $strings['LastName'] = 'Sobrenome';
        $strings['Timezone'] = 'Fuso Horário';
        $strings['Edit'] = 'Editar';
        $strings['Change'] = 'Alterar';
        $strings['Rename'] = 'Renomear';
        $strings['Remove'] = 'Remover';
        $strings['Delete'] = 'Excluir';
        $strings['Update'] = 'Atualizar';
        $strings['Cancel'] = 'Cancelar';
        $strings['Add'] = 'Adicionar';
        $strings['Name'] = 'Nome';
        $strings['Yes'] = 'Sim';
        $strings['No'] = 'Não';
        $strings['FirstNameRequired'] = 'Nome é obrigatório.';
        $strings['LastNameRequired'] = 'Sobrenome é obrigatório.';
        $strings['PwMustMatch'] = 'Confirmação de senha devem coincidir com a senha.';
        $strings['PwComplexity'] = 'A senha deve ter pelo menos 6 caracteres com uma combinação de letras, números e símbolos.';
        $strings['ValidEmailRequired'] = 'Um endereço de e-mail válido é obrigatório.';
        $strings['UniqueEmailRequired'] = 'Este endereço de e-mail já está registrado.';
        $strings['UniqueUsernameRequired'] = 'Esse nome de usuário já está registrado.';
        $strings['UserNameRequired'] = 'Nome de usuário é obrigatório.';
        $strings['CaptchaMustMatch'] = 'Por favor digite as letras da imagem de segurança exatamente como mostrado.';
        $strings['Today'] = 'Hoje';
        $strings['Week'] = 'Semana';
        $strings['Month'] = 'Mês';
        $strings['BackToCalendar'] = 'Voltar ao calendário';
        $strings['BeginDate'] = 'Início';
        $strings['EndDate'] = 'Final';
        $strings['Username'] = 'Usuário';
        $strings['Password'] = 'Senha';
        $strings['PasswordConfirmation'] = 'Confirmar Senha';
        $strings['DefaultPage'] = 'Página Inicial Padrão';
        $strings['MyCalendar'] = 'Meu Calendário';
        $strings['ScheduleCalendar'] = 'Calendário de Agendas';
        $strings['Registration'] = 'Registro';
        $strings['NoAnnouncements'] = 'Não há anúncios';
        $strings['Announcements'] = 'Anúncios';
        $strings['NoUpcomingReservations'] = 'Você não tem reservas próximas';
        $strings['UpcomingReservations'] = 'Reservas Futuras';
        $strings['ShowHide'] = 'Mostrar/Esconder';
        $strings['Error'] = 'Erro Desconhecido';
        $strings['ReturnToPreviousPage'] = 'Retornar para a última página que você estava no';
        $strings['UnknownError'] = 'Erro Desconhecido';
        $strings['InsufficientPermissionsError'] = 'Você não tem permissão para acessar este recurso';
        $strings['MissingReservationResourceError'] = 'Um recurso não foi selecionado';
        $strings['MissingReservationScheduleError'] = 'A agenda não foi selecionada';
        $strings['DoesNotRepeat'] = 'Não Repetir';
        $strings['Daily'] = 'Diário';
        $strings['Weekly'] = 'Semanal';
        $strings['Monthly'] = 'Mensal';
        $strings['Yearly'] = 'Anual';
        $strings['RepeatPrompt'] = 'Repetir';
        $strings['hours'] = 'horas';
        $strings['days'] = 'dias';
        $strings['weeks'] = 'semanas';
        $strings['months'] = 'meses';
        $strings['years'] = 'anos';
        $strings['day'] = 'dia';
        $strings['week'] = 'semana';
        $strings['month'] = 'mês';
        $strings['year'] = 'ano';
        $strings['repeatDayOfMonth'] = 'dia do mês';
        $strings['repeatDayOfWeek'] = 'dia da semana';
        $strings['RepeatUntilPrompt'] = 'Até';
        $strings['RepeatEveryPrompt'] = 'Todo';
        $strings['RepeatDaysPrompt'] = 'Em';
        $strings['CreateReservationHeading'] = 'Criar uma nova reserva';
        $strings['EditReservationHeading'] = 'Edição de reserva %s';
        $strings['ViewReservationHeading'] = 'Vendo reserva %s';
        $strings['ReservationErrors'] = 'Alterar Reserva';
        $strings['Create'] = 'Criar';
        $strings['ThisInstance'] = 'Apenas Esta Instância';
        $strings['AllInstances'] = 'Todas as Instâncias';
        $strings['FutureInstances'] = 'Instâncias Futuras';
        $strings['Print'] = 'Imprimir';
        $strings['ShowHideNavigation'] = 'Mostrar/Esconder Navegação';
        $strings['ReferenceNumber'] = 'Número de Referência';
        $strings['Tomorrow'] = 'Amanhã';
        $strings['LaterThisWeek'] = 'Ainda Esta Semana';
        $strings['NextWeek'] = 'Próxima Semana';
        $strings['SignOut'] = 'Sair';
        $strings['LayoutDescription'] = 'Inicia em %s, mostrando %s dias de uma só vez';
        $strings['AllResources'] = 'Todos os Recursos';
        $strings['TakeOffline'] = 'Colocar Offline';
        $strings['BringOnline'] = 'Colocar Online';
        $strings['AddImage'] = 'Adicionar Imagem';
        $strings['NoImage'] = 'Nenhuma Imagem';
        $strings['Move'] = 'Mover';
        $strings['AppearsOn'] = 'Aparece Em %s';
        $strings['Location'] = 'Local';
        $strings['NoLocationLabel'] = '(nenhum local definido)';
        $strings['Contact'] = 'Contato';
        $strings['NoContactLabel'] = '(nenhuma informação de contato)';
        $strings['Description'] = 'Descrição';
        $strings['NoDescriptionLabel'] = '(nenhuma descrição)';
        $strings['Notes'] = 'Notas';
        $strings['NoNotesLabel'] = '(nenhuma nota)';
        $strings['NoTitleLabel'] = '(nenhum título)';
        $strings['UsageConfiguration'] = 'Configuração de Uso';
        $strings['ChangeConfiguration'] = 'Alterar Configuração';
        $strings['ResourceMinLength'] = 'As reservas devem durar pelo menos %s';
        $strings['ResourceMinLengthNone'] = 'Não há uma duração mínima de reserva';
        $strings['ResourceMaxLength'] = 'As reservas não podem durar mais de %s';
        $strings['ResourceMaxLengthNone'] = 'Não há uma duração máxima de reserva';
        $strings['ResourceRequiresApproval'] = 'As reservas devem ser aprovadas';
        $strings['ResourceRequiresApprovalNone'] = 'Reservas não necessitam de aprovação';
        $strings['ResourcePermissionAutoGranted'] = 'A permissão é concedida automaticamente';
        $strings['ResourcePermissionNotAutoGranted'] = 'A permissão não é concedida automaticamente';
        $strings['ResourceMinNotice'] = 'As reservas devem ser feitas pelo menos %s antes da hora de início';
        $strings['ResourceMinNoticeNone'] = 'As reservas podem ser feitas até o tempo atual';
        $strings['ResourceMaxNotice'] = 'As reservas não deve terminar mais de %s a partir do tempo atual';
        $strings['ResourceMaxNoticeNone'] = 'As reservas podem acabar a qualquer momento no futuro';
        $strings['ResourceAllowMultiDay'] = 'As reservas podem ser feitas através de dias';
        $strings['ResourceNotAllowMultiDay'] = 'As reservas não podem ser feitas através de dias';
        $strings['ResourceCapacity'] = 'Este recurso tem uma capacidade de %s pessoas';
        $strings['ResourceCapacityNone'] = 'Esse recurso tem capacidade ilimitada';
        $strings['AddNewResource'] = 'Adicionar Novo Recurso';
        $strings['AddNewUser'] = 'Adicionar Novo Usuário';
        $strings['AddUser'] = 'Adicionar Usuário';
        $strings['Schedule'] = 'Agenda';
        $strings['AddResource'] = 'Adicionar Recurso';
        $strings['Capacity'] = 'Capacidade';
        $strings['Access'] = 'Acesso';
        $strings['Duration'] = 'Duração';
        $strings['Active'] = 'Ativo';
        $strings['Inactive'] = 'Inativo';
        $strings['ResetPassword'] = 'Redefinir Senha';
        $strings['LastLogin'] = 'Último Acesso';
        $strings['Search'] = 'Pesquisar';
        $strings['ResourcePermissions'] = 'Permissões de Recursos';
        $strings['Reservations'] = 'Reservas';
        $strings['Groups'] = 'Grupos';
        $strings['ResetPassword'] = 'Redefinir Senha';
        $strings['AllUsers'] = 'Todos os Usuários';
        $strings['AllGroups'] = 'Todos os Grupos';
        $strings['AllSchedules'] = 'Todas as Agendas';
        $strings['UsernameOrEmail'] = 'Usuário ou Email';
        $strings['Members'] = 'Membros';
        $strings['QuickSlotCreation'] = 'Criar intervalos a cada %s minutos entre %s e %s';
        $strings['ApplyUpdatesTo'] = 'Aplicar Atualizações Para';
        $strings['CancelParticipation'] = 'Cancelar Participação';
        $strings['Attending'] = 'Atender';
        $strings['QuotaConfiguration'] = 'Em %s para %s usuários em %s estão limitados a %s %s por %s';
        $strings['reservations'] = 'reservas';
        $strings['ChangeCalendar'] = 'Alterar Calendário';
        $strings['AddQuota'] = 'Adicionar Cota';
        $strings['FindUser'] = 'Encontrar Usuário';
        $strings['Created'] = 'Criado';
        $strings['LastModified'] = 'Última Modificação';
        $strings['GroupName'] = 'Nome do Grupo';
        $strings['GroupMembers'] = 'Membros do Grupo';
        $strings['GroupRoles'] = 'Regras do Grupo';
        $strings['GroupAdmin'] = 'Administrador do Grupo';
        $strings['Actions'] = 'Ações';
        $strings['CurrentPassword'] = 'Senha Atual';
        $strings['NewPassword'] = 'Nova Senha';
        $strings['InvalidPassword'] = 'Senha atual está incorreto';
        $strings['PasswordChangedSuccessfully'] = 'Sua senha foi alterada com sucesso';
        $strings['SignedInAs'] = 'Logado como';
        $strings['NotSignedIn'] = 'Você não está logado';
        $strings['ReservationTitle'] = ' Título da reserva';
        $strings['ReservationDescription'] = 'Descrição da reserva';
        $strings['ResourceList'] = 'Recursos a serem reservados';
        $strings['Accessories'] = 'Acessórios';
        $strings['Add'] = 'Adicionar';
        $strings['ParticipantList'] = 'Participantes';
        $strings['InvitationList'] = 'Convidados';
        $strings['AccessoryName'] = 'Nome do Acessório';
        $strings['QuantityAvailable'] = 'Quantidade Disponível';
        $strings['Resources'] = 'Recursos';
        $strings['Participants'] = 'Participantes';
        $strings['User'] = 'Usuário';
        $strings['Resource'] = 'Recurso';
        $strings['Status'] = 'Estado';
        $strings['Approve'] = 'Aprovar';
        $strings['Page'] = 'Página';
        $strings['Rows'] = 'Linhas';
        $strings['Unlimited'] = 'Ilimitado';
        $strings['Email'] = 'Email';
        $strings['EmailAddress'] = 'Endereço de Email';
        $strings['Phone'] = 'Telefone';
        $strings['Organization'] = 'Organização';
        $strings['Position'] = 'Posição';
        $strings['Language'] = 'Idioma';
        $strings['Permissions'] = 'Permissões';
        $strings['Reset'] = 'Resetar';
        $strings['FindGroup'] = 'Encontrar Grupo';
        $strings['Manage'] = 'Gerenciar';
        $strings['None'] = 'Nenhum';
        $strings['AddToOutlook'] = 'Adicionar ao Outlook';
        $strings['Done'] = 'Concluído';
        $strings['RememberMe'] = 'Lembrar-se de Mim';
        $strings['FirstTimeUser?'] = 'Usando pela primeira vez?';
        $strings['CreateAnAccount'] = 'Criar Uma Conta';
        $strings['ViewSchedule'] = 'Ver Agendas';
        $strings['ForgotMyPassword'] = 'Eu Esqueci Minha Senha';
        $strings['YouWillBeEmailedANewPassword'] = 'Você receberá um email com uma nova senha gerada aleatoriamente';
        $strings['Close'] = 'Fechar';
        $strings['ExportToCSV'] = 'Exportar para CSV';
        $strings['OK'] = 'OK';
        $strings['Working'] = 'Trabalhando';
        $strings['Login'] = 'Entrar';
        $strings['AdditionalInformation'] = 'Informações Adicionais';
        $strings['AllFieldsAreRequired'] = 'todos os campos são obrigatórios';
        $strings['Optional'] = 'opcional';
        $strings['YourProfileWasUpdated'] = 'Seu perfil foi atualizado';
        $strings['YourSettingsWereUpdated'] = 'Suas configurações foram atualizadas';
        $strings['Register'] = 'Registrar';
        $strings['SecurityCode'] = 'Código de Segurança';
        $strings['ReservationCreatedPreference'] = 'Quando eu criar uma reserva ou uma reserva é criada em meu nome';
        $strings['ReservationUpdatedPreference'] = 'Quando eu atualizar uma reserva ou uma reserva é atualizada em meu nome';
	$strings['ReservationDeletedPreference'] = 'Quando eu excluir uma reserva ou uma reserva é excluída em meu nome';
        $strings['ReservationApprovalPreference'] = 'Quando minha reserva pendente é aprovada';
        $strings['PreferenceSendEmail'] = 'Enviar um e-mail';
        $strings['PreferenceNoEmail'] = 'Não me notificar';
        $strings['ReservationCreated'] = 'A sua reserva foi criada com sucesso!';
        $strings['ReservationUpdated'] = 'A sua reserva foi atualizada com sucesso!';
        $strings['ReservationRemoved'] = 'A sua reserva foi removida';
        $strings['YourReferenceNumber'] = 'O seu número de referência é %s';
        $strings['UpdatingReservation'] = 'Atualizando reserva';
        $strings['ChangeUser'] = 'Alterar Usuário';
        $strings['MoreResources'] = 'Mais Recursos';
        $strings['ReservationLength'] = 'Duração da Reserva';
        $strings['ParticipantList'] = 'Lista de Participantes';
        $strings['AddParticipants'] = 'Adicionar Participantes';
        $strings['InviteOthers'] = 'Convidar Outros';
        $strings['AddResources'] = 'Adicionar Recursos';
        $strings['AddAccessories'] = 'Adicionar Acessórios';
        $strings['Accessory'] = 'Acessório';
        $strings['QuantityRequested'] = 'Quantidade Solicitada';
        $strings['CreatingReservation'] = 'Criação de Reserva';
        $strings['UpdatingReservation'] = 'Atualizando Reserva';
        $strings['DeleteWarning'] = 'Esta ação é permanente e irrecuperável!';
        $strings['DeleteAccessoryWarning'] = 'Excluindo este acessório irá removê-lo de todas as reservas.';
        $strings['AddAccessory'] = 'Adicionar Acessório';
        $strings['AddBlackout'] = 'Adicionar Horário Indisponível';
        $strings['AllResourcesOn'] = 'Todos Recursos Em';
        $strings['Reason'] = 'Razão';
        $strings['BlackoutShowMe'] = 'Mostrar Reservas Conflitantes';
        $strings['BlackoutDeleteConflicts'] = 'Excluir Reservas Conflitantes';
        $strings['Filter'] = 'Filtro';
        $strings['Between'] = 'Entre';
        $strings['CreatedBy'] = 'Criado Por';
        $strings['BlackoutCreated'] = 'Horário Indisponível Criado!';
        $strings['BlackoutNotCreated'] = 'Horário indisponível não pôde ser criado!';
        $strings['BlackoutConflicts'] = 'Existem horários indisponíveis conflitantes';
        $strings['ReservationConflicts'] = 'Existem horários de reservas conflitantes';
        $strings['UsersInGroup'] = 'Usuários neste grupo';
        $strings['Browse'] = 'Navegar';
        $strings['DeleteGroupWarning'] = 'Excluindo este grupo irá remover todas as permissões de recursos associados. Os usuários deste grupo podem perder o acesso aos recursos.';
        $strings['WhatRolesApplyToThisGroup'] = 'Que regras se aplicam a esse grupo?';
        $strings['WhoCanManageThisGroup'] = 'Quem pode gerenciar este grupo?';
        $strings['AddGroup'] = 'Adicionar Grupo';
        $strings['AllQuotas'] = 'Todas as Cotas';
        $strings['QuotaReminder'] = 'Lembre-se: As cotas são aplicadas com base no fuso horário da agenda.';
        $strings['AllReservations'] = 'Todas as Reservas';
        $strings['PendingReservations'] = 'Reservas Pendentes';
        $strings['Approving'] = 'Aprovar';
        $strings['MoveToSchedule'] = 'Mover para agenda';
        $strings['DeleteResourceWarning'] = 'Excluindo este recurso irá apagar todos os dados associados, incluindo';
        $strings['DeleteResourceWarningReservations'] = 'todas as reservas passadas, atuais e futuras associados';
        $strings['DeleteResourceWarningPermissions'] = 'todas as atribuições de permissão';
        $strings['DeleteResourceWarningReassign'] = 'Por favor, reatribuir qualquer coisa que você não queira que seja eliminado antes de prosseguir';
        $strings['ScheduleLayout'] = 'Layout (todos os horários %s)';
        $strings['ReservableTimeSlots'] = 'Intervalos de Horários Reserváveis';
        $strings['BlockedTimeSlots'] = 'Intervalos de Horários Bloqueados';
        $strings['ThisIsTheDefaultSchedule'] = 'Esta é a agenda padrão';
        $strings['DefaultScheduleCannotBeDeleted'] = 'Agenda padrão não pode ser excluída';
        $strings['MakeDefault'] = 'Tornar Padrão';
        $strings['BringDown'] = 'Mover para Baixo';
        $strings['ChangeLayout'] = 'Mudar Layout';
        $strings['AddSchedule'] = 'Adicionar Agenda';
        $strings['StartsOn'] = 'Inicia Em';
        $strings['NumberOfDaysVisible'] = 'Número de Dias Visíveis';
        $strings['UseSameLayoutAs'] = 'Usar Mesmo Layout Como';
        $strings['Format'] = 'Formato';
        $strings['OptionalLabel'] = 'Título Opcional';
        $strings['LayoutInstructions'] = 'Digite um intervalo por linha. Intervalos devem ser fornecidos para todas as 24 horas do dia começando e terminando às 12:00.';
        $strings['AddUser'] = 'Adicionar Usuário';
        $strings['UserPermissionInfo'] = 'O acesso efetivo ao recurso pode ser diferente dependendo da função do usuário, permissões de grupo, ou definições de permissões externas';
        $strings['DeleteUserWarning'] = 'Excluir este usuário irá remover todas as suas reservas atuais, futuros e histórico.';
        $strings['AddAnnouncement'] = 'Adicionar Anúncio';
        $strings['Announcement'] = 'Anúncio';
        $strings['Priority'] = 'Prioridade';
        $strings['Reservable'] = 'Reservável';
        $strings['Unreservable'] = 'Não Reservável';
        $strings['Reserved'] = 'Reservados';
        $strings['MyReservation'] = 'Minhas Reservas';
        $strings['Pending'] = 'Pendente';
        $strings['Past'] = 'Passado';
        $strings['Restricted'] = 'Restrito';
        $strings['ViewAll'] = 'Ver Todos';
        $strings['MoveResourcesAndReservations'] = 'Mover recursos e reservas para';
        $strings['TurnOffSubscription'] = 'Desligar Assinaturas de Calendário';
        $strings['TurnOnSubscription'] = 'Permitir Assinaturas para este Calendário';
        $strings['SubscribeToCalendar'] = 'Assinar este Calendário';
        $strings['SubscriptionsAreDisabled'] = 'O administrador desabilitou assinaturas de calendário';
        $strings['NoResourceAdministratorLabel'] = '(Nenhum Administrador de Recursos)';
        $strings['WhoCanManageThisResource'] = 'Quem Pode Gerenciar Este Recurso?';
        $strings['ResourceAdministrator'] = 'Administrador de Recursos';
        $strings['Private'] = 'Privado';
        $strings['Accept'] = 'Aceitar';
        $strings['Decline'] = 'Recusar';
        $strings['ShowFullWeek'] = 'Mostrar Semana Completa';
        $strings['CustomAttributes'] = 'Atributos personalizados';
        $strings['AddAttribute'] = 'Adicionar um atributo';
        $strings['EditAttribute'] = 'Atualizar um atributo';
        $strings['DisplayLabel'] = 'Mostrar Rótulo';
        $strings['Type'] = 'Tipo';
        $strings['Required'] = 'Obrigatório';
        $strings['ValidationExpression'] = 'Expressão de Validação';
        $strings['PossibleValues'] = 'Valores Possíveis';
        $strings['SingleLineTextbox'] = 'Caixa de texto de linha única';
        $strings['MultiLineTextbox'] = 'Caixa de texto de várias linhas';
        $strings['Checkbox'] = 'Caixa de seleção';
        $strings['SelectList'] = 'Lista de seleção';
        $strings['CommaSeparated'] = 'separados por vírgula';
        $strings['Category'] = 'Categoria';
        $strings['CategoryReservation'] = 'Reservar';
        $strings['CategoryGroup'] = 'Grupo';
        $strings['SortOrder'] = 'Ordem';
        $strings['Title'] = 'Título';
        $strings['AdditionalAttributes'] = 'Atributos Adicionais';
        $strings['True'] = 'Verdadeiro';
        $strings['False'] = 'Falso';
	$strings['ForgotPasswordEmailSent'] = 'Um email foi enviado para o endereço fornecido com instruções para redefinir sua senha';
	$strings['ActivationEmailSent'] = 'Você receberá um email de ativação em breve.';
	$strings['AccountActivationError'] = 'Desculpe, não foi possível ativar sua conta.';
	$strings['Attachments'] = 'Anexos';
	$strings['AttachFile'] = 'Anexar Arquivo';
	$strings['Maximum'] = 'máximo';
        // End Strings

        // Errors
        $strings['LoginError'] = 'Não foi possível encontrar seu usuário ou senha';
        $strings['ReservationFailed'] = 'A sua reserva não pode ser feita';
        $strings['MinNoticeError'] = 'Esta reserva exige aviso prévio. A data mais próxima que pode ser reservado é %s.';
        $strings['MaxNoticeError'] = 'Esta reserva não pode ser feita tão longe no futuro. A última data que pode ser reservado é %s.';
        $strings['MinDurationError'] = 'Esta reserva deve durar pelo menos %s.';
        $strings['MaxDurationError'] = 'Esta reserva não pode durar mais do que %s.';
        $strings['ConflictingAccessoryDates'] = 'Não são suficientes os seguintes acessórios:';
        $strings['NoResourcePermission'] = 'Você não tem permissão para acessar um ou mais dos recursos solicitados';
        $strings['ConflictingReservationDates'] = 'Há reservas conflitantes nas seguintes datas:';
        $strings['StartDateBeforeEndDateRule'] = 'A data de início deve ser anterior à data de término';
        $strings['StartIsInPast'] = 'A data de início não pode ser no passado';
        $strings['EmailDisabled'] = 'O administrador desabilitou notificações de e-mail';
        $strings['ValidLayoutRequired'] = 'Intervalos devem ser fornecidos para todas as 24 horas do dia começando e terminando às 12:00.';
        $strings['CustomAttributeErrors'] = 'Há problemas com os atributos adicionais que você forneceu:';
        $strings['CustomAttributeRequired'] = '%s é um campo obrigatório';
        $strings['CustomAttributeInvalid'] = 'O valor fornecido para %s é inválido';
        $strings['AttachmentLoadingError'] = 'Desculpe, houve um problema ao carregar o arquivo solicitado.';
        $strings['InvalidAttachmentExtension'] = 'Você só pode fazer upload de arquivos do tipo: %s';
        // End Errors

        // Page Titles
        $strings['CreateReservation'] = 'Criar Reservas';
        $strings['EditReservation'] = 'Editar Reservas';
        $strings['LogIn'] = 'Entrar';
        $strings['ManageReservations'] = 'Reservas';
        $strings['AwaitingActivation'] = 'Aguardando Ativação';
        $strings['PendingApproval'] = 'Aguardando Aprovação';
        $strings['ManageSchedules'] = 'Agendas';
        $strings['ManageResources'] = 'Recursos';
        $strings['ManageAccessories'] = 'Acessórios';
        $strings['ManageUsers'] = 'Usuários';
        $strings['ManageGroups'] = 'Grupos';
        $strings['ManageQuotas'] = 'Cotas';
        $strings['ManageBlackouts'] = 'Horários Indisponíveis';
        $strings['MyDashboard'] = 'Meu Painel de Controle';
        $strings['ServerSettings'] = 'Configurações do Servidor';
        $strings['Dashboard'] = 'Painel de Controle';
        $strings['Help'] = 'Ajuda';
        $strings['Bookings'] = 'Reservas';
        $strings['Schedule'] = 'Agenda';
        $strings['Reservations'] = 'Reservas';
        $strings['Account'] = 'Conta';
        $strings['EditProfile'] = 'Editar Meu Perfil';
        $strings['FindAnOpening'] = 'Encontrar Uma Abertura';
        $strings['OpenInvitations'] = 'Abrir Convites';
        $strings['MyCalendar'] = 'Meu Calendário';
        $strings['ResourceCalendar'] = 'Calendário de Recursos';
        $strings['Reservation'] = 'Nova Reserva';
        $strings['Install'] = 'Instalação';
        $strings['ChangePassword'] = 'Alterar Senha';
        $strings['MyAccount'] = 'Minha Conta';
        $strings['Profile'] = 'Perfil';
        $strings['ApplicationManagement'] = 'Gerenciar Aplicativos';
        $strings['ForgotPassword'] = 'Esqueceu a Senha';
        $strings['NotificationPreferences'] = 'Preferências de Notificação';
        $strings['ManageAnnouncements'] = 'Anúncios';
        $strings['Responsibilities'] = 'Responsabilidades';
        $strings['GroupReservations'] = 'Reservas para Grupos';
        $strings['ResourceReservations'] = 'Reservas de Recurso';
        $strings['Customization'] = 'Personalização';
        $strings['Attributes'] = 'Atributos';
	$strings['AccountActivation'] = 'Ativação da Conta';
        // End Page Titles

        // Day representations
        $strings['DaySundaySingle'] = 'D';
        $strings['DayMondaySingle'] = 'S';
        $strings['DayTuesdaySingle'] = 'T';
        $strings['DayWednesdaySingle'] = 'Q';
        $strings['DayThursdaySingle'] = 'Q';
        $strings['DayFridaySingle'] = 'S';
        $strings['DaySaturdaySingle'] = 'S';

        $strings['DaySundayAbbr'] = 'Dom';
        $strings['DayMondayAbbr'] = 'Seg';
        $strings['DayTuesdayAbbr'] = 'Ter';
        $strings['DayWednesdayAbbr'] = 'Qua';
        $strings['DayThursdayAbbr'] = 'Qui';
        $strings['DayFridayAbbr'] = 'Sex';
        $strings['DaySaturdayAbbr'] = 'Sáb';

        // Email Subjects
        $strings['ReservationApprovedSubject'] = 'Sua Reserva Foi Aprovada';
        $strings['ReservationCreatedSubject'] = 'Sua Reserva Foi Criada';
        $strings['ReservationUpdatedSubject'] = 'Sua Reserva Foi Atualizada';
        $strings['ReservationDeletedSubject'] = 'Sua Reserva Foi Removida';
        $strings['ReservationCreatedAdminSubject'] = 'Notificação: A Reserva Foi Criada';
        $strings['ReservationUpdatedAdminSubject'] = 'Notificação: A Reserva Foi Atualizada';
        $strings['ReservationDeleteAdminSubject'] = 'Notificação: A Reserva Foi Removida';
        $strings['ParticipantAddedSubject'] = 'Notificação de Participação na Reserva';
        $strings['ParticipantDeletedSubject'] = 'Reserva Removida';
        $strings['InviteeAddedSubject'] = 'Convite de Reserva';
        $strings['ResetPassword'] = 'Pedido de Redefinição de Senha';
        $strings['ActivateYourAccount'] = 'Por favor Ative Sua Conta';
        //

        $this->Strings = $strings;

        return $this->Strings;
    }

    /**
     * @return array
     */
    protected function _LoadDays()
    {
        $days = array();

        /***
        DAY NAMES
        All of these arrays MUST start with Sunday as the first element
        and go through the seven day week, ending on Saturday
         ***/
        // The full day name
        $days['full'] = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
        // The three letter abbreviation
        $days['abbr'] = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb');
        // The two letter abbreviation
        $days['two'] = array('Do', 'Se', 'Te', 'Qu', 'Qu', 'Se', 'Sá');
        // The one letter abbreviation
        $days['letter'] = array('D', 'S', 'T', 'Q', 'Q', 'S', 'S');

        $this->Days = $days;

        return $this->Days;
    }

    /**
     * @return array
     */
    protected function _LoadMonths()
    {
        $months = array();

        /***
        MONTH NAMES
        All of these arrays MUST start with January as the first element
        and go through the twelve months of the year, ending on December
         ***/
        // The full month name
        $months['full'] = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        // The three letter month name
        $months['abbr'] = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

        $this->Months = $months;

        return $this->Months;
    }

    /**
     * @return array
     */
    protected function _LoadLetters()
    {
        $this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

        return $this->Letters;
    }

    protected function _GetHtmlLangCode()
    {
        return 'pt-br';
    }
}

?>