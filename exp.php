
<?php
    /*
     * users
     */

    interface iUser() {
    $this->location->parent();
    $this->departament->parent();
    $this->id();
    $this->position();
    $this->login();
    $this->name();
    $this->role();
    $this->permissions();
    $this->master->parent(); // user хозяин
    $this->tasks();

    $this->closeMessage(); // письмо по иерархие вниз
    $this->openMessage() // Письмо по иерархии вверх


}



    /*
     * location
     */

   interface iLocation(){
    $this->departament->child();
    $this->users->child();
    $this->name();
    $this->type();
    $this->id();
}


    /*
     * departament
     */

    interface iDepartament() {
        $this->location()->parent();
        $this->id();
        $this->name();
        $this->users()->child();
        $this->parametrs = array();
    }


    /*
     * parametr
     */


    interface iParametr() {
        // параметры этой все хуйни

    }