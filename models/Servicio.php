<?php
    class Servicio
    {
        public function insert_servicio($NrAnalitico)
        {
            $url = "http://transtotalonline.azurewebsites.net/api/cxp/CXP_EntregaRendir/integracion";    
            $data = array(
                "Id" => "0",
                "TpoEntregaRendir" => "AP",   //No tengo este dato //Consulta si solo los anticipos a proveedores
                "NrEntregaRendir"=> "",
                "IdOper" => "",
                "IdEmisor" => "07",   //ID de la Empresa
                "DesEmisor" => "",
                "AREmisor" => 0,                                                   
                "IdCCosto" => "CC02010101", //Centro de Costo
                "DesCCosto" => "",
                "IdSolicitante" => "47229137", //ID del OPERADOR
                "DesSolicitante" => "",
                "EMailSolicitante" => "dhenriquez@ulog.com.pe", //Correo del Operador
                "TpEntidad" => 1, 
                "NdEntidad" => "20392952455",
                "RsEntidad" => "CONTRANS S.A.C.", //Consultar para no mandar
                "AREntidad" =>   0,                                                   
                "BCEntidad" =>   0,
                "FchEmision" => "18/01/2021",
                "FchRendicion" => "01/01/1900", //Mandarlo tal cual 
                "NroAsientoRendicion" => "",
                "IdMoneda" => "USD",
                "TpoCambio" => 3.6140,  //Enviarme el tipo de cambio
                "Importe" => 166.00,
                "TpAnalitico" => "",
                "IdAnalitico" => 0,
                "NrAnalitico" => $NrAnalitico,
                //"NrAnalitico" => "SEC0121-006473", //Nro de Operacion
                "TpReferencia" => "",
                "IdReferencia" => 0,
                "NrReferencia" => "",
                "TpOrigen" => "",
                "IdOrigen" => 0,
                "NrOrigen" => "",
                "Glosa" => "PAGO EN LÍNEA GATE OUT CODIGO DE PAGO 2021010993 // CLIENTE ALICORP BK LIMB01561900", //No tengo glosa podria concatenar de los otros datos?
                "FlagFacturacionTerceros" => 0,
                "IdServicio" => "",
                "DesServicio" => "",
                "FlagDetraccion" => 0,       //Preguntar detraccion
                "PorcentajeDetraccion" => 0, //Preguntar detraccion
                "ImporteDetraccion" => 0,    //Preguntar detraccion
                "FlagRetencion" => 0,        //Preguntar detraccion
                "FlagSubAgenciamiento" => 0,
                "IdTipoEntregaRendir" => "005", //Pedir como servicio
                "DesTipoEntregaRendir" => "",
                "TipoPago" => "TR",   //No tengo este dato //Pasar servicio
                "IdBanco" => "CRE",   // Este dato viene del RUC?   //Solicitar servicio
                "DesBanco" => "",     //Solicitar Servicio
                "InterbancariaPEN" => "0000000000000",
                "InterbancariaUSD" => "0000000000000",
                "FchOperacion" => "01/01/1900",   //Esta fecha puede seguir siendo 01/01/1900
                "DiasDiferidos" => 0,           //Si cheke es diferido ver que colocar
                "Condicion" => 2,               //Para todos es 2 por que esta aprobado
                "DesCondicion" => "",
                "IdAprobador" => "fmunoz",      //Holomar SAAD solicitar servicio de usuarios
                "DesAprobador" => "",
                "Estado" => "A",               
                "DesEstado" => "",
                "Modo" => "N",                         
                "Usuario" => "dhenriquez",      //Holomar SAAD solicitar servicio de usuarios
                "VoBo_IdActividad" => 0,       
                "VoBo_DesActividad" => 0,      
                "IdSustento" => 0,              
                "VoBo_Modo" => 0,               
                "VoBoMsg" => "",            
                "IdERContab" => 0,
                "FchERContab" => "01/01/1900"
            );
            $payload = json_encode($data);
    
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER,
                    array("Content-type: application/json"));
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            $json_response = curl_exec($curl);
            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if ( $status != 201 ) {
                die($json_response);
            }
            
            curl_close($curl);
            $response = json_decode($json_response, true);
        }

        public function insert_factura()
        {
            $url = "http://192.168.18.201:9096/api/values";    
            $data = array(
                "tico_Id" => 1,
                "mone_Id" => 2,
                "vent_Id" => 0,
                "comp_FechaEmision" => "22/01/2021",
                "comp_SubTotal" => 2203.73,
                "comp_ImporteTotal" => 2600.40,
                "comp_ImporteIgv" => 396.67,
                "clie_Id" => 15689,
                "comp_Id_UsuarioCreacion" => 72,
                "comp_Idioma" => "1",
                "comp_SucursalId" => 4,
                "comp_CentroCostosId" => 247,
                "comp_GlosaERP" => "TEST",
                "comp_Factura" => 10,
                "comp_Empresa" => '07',
                "comp_Detraccion" => 1,
                "comp_AfectoIGV" => 1,
                "comp_FormaPago" => 2,
                "comp_FechaVenci" => "20210211",
                "comp_NumeroOperacion" => "19-SN-0179-A",
                "comp_Flag_Gratuita" => 0,
                "comp_TipoOperacion_FE" => 1,
                "comp_Nave" => "NAVE TEST",
                "comp_Viaje" => "vIAJE TEST",
                "comp_PuertoTerminal" => "TERMINAL TEST",
                "Detalle" => "231|00051|COURIER|1|1041.00|2600.40|1|1228.3800|187.38|19-SN-0179-A¬ 420|00051|FORRADO DE CONTENEDOR|1|125.93|2600.40|1|148.5974|22.67|19-SN-0179-A¬ 423|00051|FUMIGACION|1|642.23|2600.40|1|757.8314|115.60|19-SN-0179-A¬425|00051|GASTOS DE TERMINAL Y PUERTO|1|394.57|2600.40|1|465.5926|71.02|19-SN-0179-A"
            );
            $payload = json_encode($data);
    
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER,
                    array("Content-type: application/json"));
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            $json_response = curl_exec($curl);
            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if ( $status != 201 ) {
                die($json_response);
            }
            
            curl_close($curl);
            $response = json_decode($json_response, true);
        }
    }
?>