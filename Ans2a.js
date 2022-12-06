/**
     Scripting languages are used for manipulating / changing stuff on existing systems.
     They are mostly intrepretted at run time.
 */

function validateEmail(email) {
  const emailRegex = new RegExp(
    /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
  );

  return emailRegex.test(email);
}

console.log(validateEmail("inbox.priyanshu@gmail.com"));
