let str = "TheQuickBrownFoxJumpsOverTheLazyDog";

//put space before all the capital letters
let new_str = str.replace(/([A-Z]+)/g, " $1");

//convert string to lowercase and trim the white spaces at the beginning of the string
let str_lowercase = new_str.toLowerCase().trim();

//change the first character into uppercase 
let final_str = str_lowercase.charAt(0).toUpperCase() + str_lowercase.slice(1);

//display the string
console.log(final_str);