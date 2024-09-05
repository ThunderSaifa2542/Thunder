const matches = (obj,source)=>Object.keys(source).every(key=>obj.hasOwnProperty(key)&&obj[key]===source[key]);

console.log(matches({name:'Thunder',nickname:'Saifa',age:'20'},{nickname:'Saifa',age:'20'}));//true

console.log(matches({nickname:'Saifa',age:'20'},{name:'Thunder',nickname:'Saifa',age:'20'}));//false