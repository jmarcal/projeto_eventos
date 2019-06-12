<?php

function validarEvento($input_method, &$formdata, &$errors) {
    $formdata['Titulo'] = filter_input($input_method, "Titulo", FILTER_SANITIZE_STRING);
    $formdata['Descricao'] = filter_input($input_method, "Descricao", FILTER_SANITIZE_STRING);
    $formdata['TipoEvento'] = filter_input($input_method, "TipoEvento", FILTER_SANITIZE_STRING);
    $formdata['DataInicio'] = filter_input($input_method, "DataInicio", FILTER_SANITIZE_STRING);
    $formdata['DataFim'] = filter_input($input_method, "DataFim", FILTER_SANITIZE_STRING);
    $formdata['Custo'] = filter_input($input_method, "Custo", FILTER_SANITIZE_NUMBER_INT);
    $formdata['IDloc'] = filter_input($input_method, "IDloc", FILTER_SANITIZE_NUMBER_INT);

    if ($formdata['Titulo'] === NULL ||
                    $formdata['Titulo'] === FALSE ||
                    $formdata['Titulo'] === "")
    {
        $errors['Title'] = "Title required";
    }
    
    if ($formdata['Descricao'] === NULL ||
                    $formdata['Descricao'] === FALSE ||
                    $formdata['Descricao'] === "")
    {
        $errors['Description'] = "Description required";
    }   
     if ($formdata['TipoEvento'] === NULL ||
                     $formdata['TipoEvento'] === FALSE ||
                     $formdata['TipoEvento'] === "")
     {
         $errors['TipoEvento'] = "Escolha tipo de evento";
     }   
    
    if ($formdata['DataInicio'] === NULL ||
                    $formdata['DataInicio'] === FALSE ||
                    $formdata['DataInicio'] === "")
    {
        $errors['StartDate'] = "Start Date  required";
    }
    
    if ($formdata['DataFim'] === NULL ||
                    $formdata['DataFim'] === FALSE ||
                    $formdata['DataFim'] === "")
    {
        $errors['EndDate'] = "End Date required";
    }
    
    if ($formdata['Custo'] === ""){
        $capacity = intval($formdata['Custo']);
        if ($capacity < 0 || $capacity > 999999) {
    }
        $errors['Cost'] = "Cost required. Cannot be a negative value";
    }
    
    if ($formdata['IDloc'] === ""){
        $locID = intval($formdata['IDloc']);
        if ($locID < 0 || $capacity > 999999) {
    }
        $errors['LocID'] = "LocationID required. Cannot be a negative value";
    }
    
}