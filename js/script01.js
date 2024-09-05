const byte_Size = str => new Blob([str]).size;
console.log(byte_Size('12345678910'));
console.log(byte_Size('Hello Thunder'));
console.log(byte_Size('ไกปู'));