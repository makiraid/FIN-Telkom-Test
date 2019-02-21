var token = "01448920394027742900";
// token.replace(/(\d{4})(\d{4})(\d{4})(\d{4})(\d{4})/);

console.log(token.replace(/(\d{4})(\d{4})(\d{4})(\d{4})(\d{4})/, "$1-$2-$3-$4-$5"));