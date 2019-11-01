const date = new Date();
const today_date = `${date.getFullYear()} - ${date.getMonth() + 1} - ${date.getDate()}`;

document.body.querySelector(".today_date").innerHTML = `Today's date: ${today_date}`;
