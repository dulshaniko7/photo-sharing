class AppStorage {

    storeToken(token){
        localStorage.setItem('token',token)
    }
    storeUser(user){
        localStorage.setItem('user',user)
    }
    storeID(id){
        localStorage.setItem('id',id)
    }
    storeEmail(email){
        localStorage.setItem('email',email)
    }

    store(token,user,id,email){
        this.storeToken(token)
        this.storeUser(user)
        this.storeID(id)
        this.storeEmail(email)
    }


    clear(){
        localStorage.removeItem('token')
        localStorage.removeItem('user')
    }

    getToken(){
        localStorage.getItem(token)
    }

    getUser(){
        localStorage.getItem(user)
    }
    getId(){
        localStorage.getItem(id)
    }
    getEmail(){
        localStorage.getItem(email)
    }
}

export default AppStorage = new AppStorage()
