# paystack-payment-before-registration
PHP code to receive payment before registration
Hey welcome,
 * ok let's dive in. First, we initiated a session variable to hold the form data,
 * When the form is submitted, the form data are saved to a session variable called $_SESSION['accountForm']
 * $_SESSION['accountForm'] is to serve as a temporary storage to hold our submitted data while payment is being made.
 * 
 * Next step is the registration function. Its takes the data stored in $_SESSION['accountForm'] and save them into the database.
 * you should write your query inside the function.
 * 
 * When payment is made and is successful, the registration is done.
 * Finally, when registrationis successful, a modal is shown.
 * Customize modal's message to what you want.
