<?php return [
    'plugin' => [
        'name' => 'Stockist',
        'description' => '',
    ],
    'permission' => [
        'usage' => 'Uso de Stockist Software',
        'read_sales' => 'Ver ventas',
        'read_products' => 'Ver productos',
        'read_categories' => 'Ver categorías',
        'read_paymethods' => 'Ver metodos de pago',
    ],
    'filters' => [
        'year' => 'Todo el Año',
        'month' => 'Este Mes',
        'week' => 'Esta Semana',
        'today' => 'Hoy',
        'open_only' => 'Ocultar Cerradas',
    ],
    'sales' => [
        'menu_label' => 'Ventas',
        'product' => 'Producto',
        'products' => 'Productos',
        'sale' => 'Venta',
        'sales' => 'Ventas',
        'preview_sales' => 'Ventas',
        'manage_sales' => 'Gestión de Ventas',
        'new_sale' => 'Nueva Venta',
        'edit_sale' => 'Editar Venta',
        'product_list_selected' => 'Agregar o editar productos seleccionados',
        'products_codebar' => 'Productos por Código de Barras',
        'add_product_by_barcode' => 'Puede agregar productos, utilizando códigos de barras',
        'add_products' => 'Agregar Productos',
        'add_product' => 'Agregar Producto',
        'barcode_modal_title' => 'Agregar Producto',
        'barcode_placehold' => 'Ingrese el código aquí',
        'barcode_not_found' => 'Producto no encontrado, revise su código de barras',
        'invoice_recalculate' => 'Re-calculo de venta realizado con éxito',
        'checkout' => 'Checkout',
        'checkin' => 'Checkin',
        'recalculate' => 'Recalcular',
        'customer' => 'Vendedor',
        'receipt_of_payment' => 'Recepción de Pago',
        'receipt_of_payment_details' => 'Detalles y configuración del pago',
        'current_customer' => 'Vendedor Actual',
        'meter' => 'Meta del Mes',
        'month_meter' => 'Meta del Mes',
        'covered_expenses' => 'Gastos cubiertos',
        'profit' => 'Ingresos',
        'expense' => 'Gastos',
        'current_month' => 'Mes Corriente',
        'confirm_closed_sale' => '¿Desea confirmar esta venta?',
        'sale_is_closed' => 'Esta venta ya ha sido confirmada!',
        'title' => 'Titulo',
        'quantity' => 'Cantidad',
        'price' => 'Precio',
        'expenses' => 'Gastos',
        'subtotal' => 'Subtotal',
        'discount' => 'Descuento',
        'total' => 'Total',
        'total_sales' => 'Ventas Totales',
        'card' => 'Tarjeta',
        'debit' => 'Débito',
        'cash' => 'Efectivo',
        'credit_card' => 'Credito',
        'current_account' => 'CTE',
        'please_opening_cash_register' => 'Usted aún no ha hecho la apertura de caja, para realizar ventas.',
        'sale_recalculate' => 'Factura recalculada exitosamente!',
        'sale_successfully' => 'Venta realizada con éxito!',
        'return_to_manage_sales' => 'Volver a gestión de ventas',
    ],
    'tills' => [
        'menu_label' => 'Caja',
        'manage_tills' => 'Administrar Caja',
        'operation' => 'Operación',
        'new_operation' => 'Nueva Operación',
        'edit_operation' => 'Editar Operación',
        'preview_operation' => 'Operaciones',
        'action' => 'Operación',
        'description' => 'Descripción',
        'in_till' => 'En Caja',
        'payable' => 'Deb/Cred',
        'created_at' => 'Fecha y Hora',
        'opening_till' => 'Apertura de caja',
        'closing_till' => 'Cierre de caja',
        'deposit' => 'Ingreso de Dinero',
        'sale' => 'Nueva Venta',
        'withdrawal' => 'Retiro de Dinero',
        'summary' => 'Resumen de caja',
        'summary_till' => 'Resumen de caja',
        'confirm_summary' => '¿Desea generar un resumen de caja?, esto solo tiene uso informativo y en absoluto no afecta al cierre.',
        'deposit_withdrawl' => 'Ingreso / Retiro',
        'confirm_opening' => '¿Desea realizar la apertura de caja?',
        'confirm_closed' => '¿Desea realizar el cierre de caja correspondiente?',
        'opening_successfully' => 'Apertuda de caja realizada con éxito.',
        'already_opening' => 'Ya haz realizado la apertura de caja o aún tienes un cierre pendiente.',
        'closed_successfully' => 'Cierra de caja realizado con éxito.',
        'summary_successfully' => 'Resumen de caja realizado con éxito, el resumen es solo de uso informativo.',
        'already_closed' => 'Ya haz realizado el cierre de caja o aún no haz hecho una apertura.',
    ],
    'invoice' => [
        'name' => 'Nombre',
        'fullname' => 'Nombre Completo',
        'defaultname' => 'Nueva Venta',
        'invoice' => 'Factura/ticket',
        'invoice_number' => 'Numero de Factura',
        'invoicing' => 'Facturación',
        'description' => 'Descripción',
        'phone' => 'Telefono',
        'payment' => 'Forma de pago',
        'status' => 'Estado',
        'price' => 'Precio',
        'address' => 'Dirección',
        'city' => 'Ciudad',
        'state' => 'Provincia',
        'country' => 'Pais',
        'cash' => 'Efectivo',
        'debit' => 'Débito',
        'credit_card' => 'Crédito',
        'current_account' => 'CTE',
    ],
    'products' => [
        'menu_label' => 'Productos',
        'new_product' => 'Nuevo Producto',
        'product' => 'Producto',
        'products' => 'Productos',
        'description' => 'Descripción',
        'edit_product' => 'Editar Producto',
        'manage_product' => 'Gestión de Producto',
        'preview_product' => 'Gestión de Producto',
        'title' => 'Nombre',
        'model' => 'Modelo',
        'sku' => 'SKU / Código de barras',
        'product_name' => 'Nombre del producto',
        'is_enabled' => 'Habilitar/Deshabilitar',
        'is_stockable' => 'Control de Stock',
        'images' => 'Imagenes',
        'price_cost' => 'Precio de Costo',
        'price_sale' => 'Precio de Venta',
        'iva' => 'IVA %',
        'quantity' => 'Cantidad',
    ],
    'categories' => [
        'menu_label' => 'Categorías',
        'categories' => 'Categorías',
        'category' => 'Categoría',
        'name' => 'Nombre',
        'name_place' => 'Nombre de la categoría',
        'description' => 'Descripción',
        'enable' => 'Habilitar / Deshabilitar',
        'is_enabled' => 'Habilitado',
        'visible' => 'Mostrar / Ocultar',
        'is_visible' => 'Visible',
        'select_category' => 'Por favor, guarde y seleccione una categoría',
    ],
    'expenses' => [
        'menu_label' => 'Gastos',
        'expenses' => 'Gastos',
        'expense' => 'Gasto',
        'new_expense' => 'Nuevo Gasto',
        'edit_expense' => 'Editar Gasto',
        'manage_expenses' => 'Gastos',
        'title' => 'Titulo',
        'description' => 'Descripción',
        'amount' => 'Monto',
        'expiration' => 'Vencimiento',
        'status' => 'Estado de pago',
        'paid' => 'Pago Realizado',
        'paid_pending' => 'Pago Pendiente',
    ],
    'paymethods' => [
        'menu_label' => 'Forma de pago',
    ],
];