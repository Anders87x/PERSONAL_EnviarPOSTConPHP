<?php
class Interfaz extends Conectar
{
    public function get_factura()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "
            exec spInsert_FacturaBoleta_SLI
            @tico_Id=1,
            @mone_Id=2,
            @vent_Id=0,
            @comp_FechaEmision='22/01/2021',
            @comp_SubTotal=2203.73,
            @comp_ImporteTotal=2600.40,
            @comp_ImporteIgv=396.67,
            @clie_Id=15689,
            @comp_Id_UsuarioCreacion=72,
            @comp_Idioma='1',
            @comp_SucursalId=4,
            @comp_CentroCostosId=247,
            @comp_GlosaERP='TEST',
            @comp_Factura=10,
            @comp_Empresa='07',
            @comp_Detraccion=1,
            @comp_AfectoIGV=1,
            @comp_FormaPago=2,
            @comp_FechaVenci='20210211',
            @comp_NumeroOperacion='19-SN-0179-A',
            @comp_Flag_Gratuita=0,
            @comp_TipoOperacion_FE=1,
            @comp_Nave='NAVE TEST',
            @comp_Viaje='vIAJE TEST',
            @comp_PuertoTerminal='TERMINAL TEST' ,
            @Detalle=' 231|00051|COURIER|1|1041.00|2600.40|1|1228.3800|187.38|19-SN-0179-A¬ 420|00051|FORRADO DE CONTENEDOR|1|125.93|2600.40|1|148.5974|22.67|19-SN-0179-A¬ 423|00051|FUMIGACION|1|642.23|2600.40|1|757.8314|115.60|19-SN-0179-A¬425|00051|GASTOS DE TERMINAL Y PUERTO|1|394.57|2600.40|1|465.5926|71.02|19-SN-0179-A'
        ";
        $stmt = $conectar->prepare($sql);
        $stmt->execute();
        //return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado = $stmt->fetchAll();
        //print_r($resultado);
        //die();
    }
}
