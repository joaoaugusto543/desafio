const clients = [
    {
        id: 1,
        nome: 'Luis Santos Silveira',
        idade: 18
    },
    {
        id: 2,
        nome: 'Ricardo Lopes Alves',
        idade: 30
    },
    {
        id: 3,
        nome: 'Gustavo Silva Junior',
        idade: 26
    }

]
  
let phone = '5(1)9-876-543-21'

//Percorra o objeto clientes e mostre o nome da cada cliente da seguinte maneira:“ultimoSobrenome, primeiroNome”;

clients.forEach((client)=> {
    const nameClientArray= client.nome.split(' ')

    console.log(nameClientArray[nameClientArray.length-1], nameClientArray[0])
})

console.log('....................................')

//Formate a variável “numero” para o seguinte formato: “(XX)_X_XXXX-XXXX”;

function formatNumber(phone){
    const justNumber=phone.split('').filter((item)=>{

        if(Number.isNaN(parseInt(item))){
            return
        }
    
        return item
    })

    let newPhone='(XX)_X_XXXX-XXXX'

    justNumber.forEach((number)=>{
        newPhone=newPhone.replace('X',number)
    })

    return newPhone

}

phone=formatNumber(phone)

console.log(phone)

