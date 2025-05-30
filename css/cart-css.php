<style>
    .page-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        min-height: calc(100vh - 100px);
        background-color: var(--ivory-color);
        padding: 20px;
    }

    .cart-wrapper {
        display: flex;
        width: 100%;
        max-width: 1400px;
        gap: 20px;
        margin: auto;
    }
    
    .continue-shopping-btn {
        display: inline-block;
        padding: 12px 25px;
        background-color: var(--button-color);
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .continue-shopping-btn:hover {
        background-color: var(--button-color-hover);
        transform: translateY(-2px);
    }

    .cart-left, .cart-right {
        background-color: white;
        color: var(--page-text-color);
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 20px;
        min-height: 400px;
    }

    .cart-left {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex: 1 1 65%;
        max-height: 600px;
    }

    .itemsTable {
        max-height: 500px;
        overflow-y: auto;
        margin-bottom: 20px;
    }

    .cart-right {
        display: flex;
        flex-direction: column;
        flex: 1 1 35%;
        max-height: 600px;
    }

    .cart-right h3 {
        padding: 10px 10px;
        margin: 0;
        font-size: 1.2em;
        color: var(--noir-color);
        background-color: var(--ivory-color);
        border-bottom: 2px solid #eee;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    thead tr {
        background-color: var(--ivory-color);
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    tbody tr:last-child {
        border-bottom: none;
    }

    tbody tr td:first-child {
        width: 57%;
    }

    tbody tr td:nth-child(2) {
        width: 23%;
    }
    
    tbody tr td:nth-child(3) {
        width: 5%;
    }

    tbody tr td:nth-child(4) {
        width: 15%;
    }

    th, td {
        padding: 12px 15px;
        color: var(--page-text-color);
        text-align: center;
        vertical-align: middle;
        display: flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
    }

    th {
        font-weight: 500;
        color: var(--noir-color);
        background-color: var(--ivory-color);
        height: 100%;
    }

    th:nth-child(1) { 
        width: 57%; 
        font-weight: bold; 
    }
    
    th:nth-child(2) { 
        width: 23%; 
        font-weight: bold; 
        justify-content: right; 
        padding-right: 43px;
    }
    
    th:nth-child(3) { 
        width: 5%; 
        min-width: 80px; 
        font-weight: bold; 
        padding-left: 20px;
    }
    
    th:nth-child(4) { 
        width: 15%; 
        font-weight: bold; 
    }

    td:first-child {
        text-align: left;
        justify-content: flex-start;
    }

    thead tr {
        border-bottom: 2px solid #eee;
    }

    tr {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #eee;
        width: 100%;
    }

    .product-info {
        display: flex;
        align-items: center;
        gap: 15px;
        width: 100%;
    }

    .product-info img {
        width: 70px;
        height: 70px;
        object-fit: contain;
        border-radius: 8px;
        background-color: white;
        padding: 5px;
        flex-shrink: 0;
    }

    .product-info > div {
        flex: 1;
        position: relative;
    }

    .product-details {
        position: relative;
        overflow: hidden;
    }

    .product-details:hover {
        z-index: 1000;
        max-width: 110%;
        white-space: normal;
        overflow: visible;
    }

    .product-info h4 {
        margin: 0;
        font-size: 0.95rem;
        color: var(--noir-color);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .product-info .desc {
        font-size: 0.85rem;
        color: #666;
        margin-top: 4px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .price-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
    }

    .price-info .original-price {
        color: red;
        font-size: 0.85rem;
        text-decoration: line-through;
    }

    .price-info .discounted-price {
        font-weight: 500;
        color: var(--noir-color);
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-right: 40px;
    }

    .quantity-controls input {
        width: 45px;
        height: 32px;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 0.9rem;
        background-color: white;
    }

    .remove-btn {
        background: none;
        border: none;
        font-size: 1.2rem;
        color: #888;
        cursor: pointer;
        transition: color 0.2s;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        margin: auto;
        border-radius: 50%;
    }

    .remove-btn:hover {
        color: var(--error-color);
        background-color: rgba(249, 64, 64, 0.1);
    }

    td{
        justify-content: center;
        align-items: center;
        display: flex;
    }

    tr{
        display: flex;
        justify-content: space-between;
    }

    .summary-box {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 20px;
        flex: 1; 
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        font-size: 0.95rem;
        color: #555;
    }

    .summary-item.total {
        font-weight: 600;
        font-size: 1.1rem;
        color: var(--noir-color);
    }

    .emri-me-zbritje {
        display: flex; 
        justify-content: space-between;
    }

    .zbritja {
        margin-left: 20px;
    }

    .me-zbritje {
        display: flex;
        flex-direction: column;
    }

    .checkout-btn {
        background-color: var(--button-color);
        color: white;
        border: none;
        padding: 12px;
        width: 100%;
        font-size: 1rem;
        font-weight: 500;
        border-radius: 8px;
        cursor: pointer;
        margin-top: auto;
        transition: all 0.3s;
        position: relative;
    }

    .checkout-btn:hover {
        background-color: var(--button-color-hover);
        transform: translateY(-2px);
    }

    .checkout-btn:disabled {
        background-color: #ccc;
        cursor: not-allowed;
        transform: none;
    }

    .checkout-btn:disabled::after {
        content: "⚠️ Unsaved Changes";
        position: absolute;
        top: -35px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #ff4444;
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.9rem;
        white-space: nowrap;
        animation: pulse 2s infinite;
    }

    .checkout-btn.no-items:disabled::after {
        content: none;
    }

    .checkout-btn.processing:disabled::after {
        content: none;
    }

    @keyframes pulse {
        0% { opacity: 1; }
        50% { opacity: 0.7; }
        100% { opacity: 1; }
    }

    #prodNameXprice {
        overflow-y: auto;
        max-height: 240px;
        border-bottom: 1px solid #eee;
    }


    .save-btn {
        background-color: var(--button-color);
        color: white;
        border: none;
        padding: 12px;
        width: 100%;
        font-size: 1rem;
        font-weight: 500;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 20px;
        transition: all 0.3s;
    }

    .save-btn:hover {
        background-color: var(--button-color-hover);
        transform: translateY(-2px);
    }

    .save-btn:disabled {
        background-color: #ccc;
        cursor: not-allowed;
        transform: none;
    }

    .save-message {
        position: fixed;
        top: 55px;
        right: 20px;
        padding: 12px 20px;
        border-radius: 8px;
        background-color: #4CAF50;
        color: white;
        font-weight: 500;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .save-message.show {
        transform: translateY(0);
        opacity: 1;
    }

    /* Product details and mobile description styling */
    .mobile-desc {
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .mobile-desc.expanded {
        white-space: normal;
        overflow: visible;
        cursor: pointer;
        font-size: 0.8rem;
        line-height: 1.4;
        background-color: #f9f9f9;
        padding: 8px;
        border-radius: 6px;
        margin-top: 5px;
        position: relative;
        z-index: 5;
    }
    
    /* Empty cart styling */
    .empty-cart {
        text-align: center;
        padding: 30px 15px;
        color: #666;
        font-size: 0.95rem;
    }
    
    .empty-cart a {
        color: var(--button-color);
        text-decoration: none;
        font-weight: 500;
        margin-left: 5px;
    }
    
    .empty-cart a:hover {
        text-decoration: underline;
    }
    
    .empty-cart-summary {
        text-align: center;
        padding: 20px 10px;
        color: #666;
        font-size: 0.9rem;
    }
    
    /* Product name in summary */
    .product-name {
        max-width: 80%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .product-name:hover {
        z-index: 1000;
        max-width: 100%;
    }

    @media (max-width: 1200px) {
        .cart-wrapper {
            flex-direction: column;
            max-width: 800px;
        }

        .cart-left, .cart-right {
            width: 100%;
            max-height: none;
        }

        .itemsTable {
            max-height: 400px;
        }
    }

    @media (max-width: 850px) {
        .cart-wrapper {
            max-width: 95%;
        }
        
        .page-wrapper {
            padding: 10px;
        }
        
        .cart-left, .cart-right {
            padding: 15px;
        }

        .cart-left {
            margin-top: 40px;
        }

        .cart-right {
            margin-bottom: 40px;
        }
    }

    @media (max-width: 800px) {
        .table-headers {
            display: none;
        }   

        .itemsTable {
            margin-bottom: 0px;
        }

        .itemsTable table tbody tr td:first-child {
            width: 65%;
        }

        .itemsTable table tbody tr td:nth-child(2) {
            width: 20%;
        }

        .itemsTable table tbody tr td:nth-child(3) {
            width: 5%;
        }

        .itemsTable table tbody tr td:nth-child(4) {
            width: 5%;
        }

        .itemsTable .product-info {
            gap: 0px;
        }

        .itemsTable .quantity-controls {
            margin: 0px;
        }

        .itemsTable .remove-btn {
            margin: 0px;
        }

        .emri-me-zbritje .zbritja {
            display: none;
        }

        .itemsTable {
            display: none !important;
        }
        
        .itemsTable.small-screen {
            display: block !important;
        }

        .small-screen-product {
            width: 100% !important;
            padding: 15px !important;
        }

        .small-screen-product .product-info {
            display: flex;
            gap: 15px;
            width: 100%;
        }

        .small-screen-product .product-info img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            border-radius: 8px;
            background-color: white;
            padding: 5px;
            flex-shrink: 0;
        }

        .small-screen-product .product-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .small-screen-product .product-details {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .small-screen-product .product-details h4,
        .small-screen-product .product-details .desc {
            white-space: normal !important;
            overflow: hidden !important;
            text-overflow: unset !important;
            word-break: break-word;
            max-height: 20px;
        }

        .small-screen-product .price-quantity {
            flex-wrap: wrap;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
        }

        .small-screen-product .quantity-controls {
            margin: 0;
        }

        .small-screen-product .price-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .small-screen-product .remove-btn {
            /* margin-left: 15px; */
        }

        .cart-wrapper {
            flex-direction: column;
        }

        .cart-left, .cart-right {
            width: 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .page-wrapper {
            padding: 10px;
        }
        
        th, td {
            padding: 8px 10px;
        }
        
        .product-info img {
            width: 60px;
            height: 60px;
        }
        
        .product-info h4 {
            font-size: 0.85rem;
        }
        
        .product-info .desc {
            font-size: 0.8rem;
        }
        
        .quantity-controls input {
            width: 40px;
            height: 28px;
            font-size: 0.85rem;
        }
        
        .summary-item {
            font-size: 0.9rem;
        }
        
        .summary-item.total {
            font-size: 1rem;
        }
        
        .save-btn, .checkout-btn {
            padding: 10px;
            font-size: 0.95rem;
        }
    }

    /* Improved mobile responsiveness for smaller screens */
    @media (max-width: 580px) {
        .page-wrapper {
            padding: 5px;
            min-height: auto;
        }
        
        .cart-wrapper {
            gap: 15px;
        }
        
        thead tr {
            display: none;
        }
        
        tbody tr {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .itemsTable table tbody tr td:first-child {
            width: 60%;
        }

        .itemsTable table tbody tr td:nth-child(2) {
            width: 20%;
        }

        .itemsTable table tbody tr td:nth-child(3) {
            width: 10%;
        }

        .itemsTable table tbody tr td:nth-child(4) {
            width: 10%;
        }
        
        td {
            justify-content: space-between;
            padding: 5px 10px;
            border-bottom: none;
        }
        
        .product-info {
            width: 100%;
            margin-bottom: 10px;
        }
        
        .quantity-controls {
            margin-right: 0;
        }
        
        .remove-btn {
            margin-right: 0;
        }

        .quantity-controls input {
            width: 30px;
        }
        
        td:nth-child(3), td:nth-child(4) {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        
        .cart-left, .cart-right {
            padding: 12px;
            border-radius: 8px;
            min-height: auto;
        }
        
        .itemsTable {
            max-height: none;
            /* overflow-y: visible; */
        }
        
        .summary-box {
            gap: 15px;
        }
        
        .emri-me-zbritje {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .zbritja {
            margin-left: 0;
            font-size: 0.8rem;
        }
        
        #prodNameXprice {
            max-height: 200px;
        }
        
        .total-price {
            font-size: 0.85rem;
        }
    }

    @media (max-width: 580px) {
        .product-name {
            max-width: 100%;
            white-space: normal;
            word-break: break-word;
        }
    }
    
    @media (max-width: 480px) {
        .product-info {
            gap: 10px;
        }
        
        .product-info img {
            width: 50px;
            height: 50px;
        }
        
        .save-btn, .checkout-btn {
            padding: 10px;
            font-size: 0.9rem;
        }
        
        .summary-item.total {
            font-size: 0.95rem;
        }
        
        .summary-item {
            font-size: 0.85rem;
        }

        tbody tr {
            padding: 10px 0;
        }

        .product-info > div {
            width: -webkit-fill-available;
        }

        .itemsTable table tbody tr td:first-child {
            width: 50%;
        }

        .itemsTable table tbody tr td:nth-child(2) {
            width: 25%;
        }

        .itemsTable table tbody tr td:nth-child(3) {
            width: 15%;
        }

        .itemsTable table tbody tr td:nth-child(4) {
            width: 10%;
        }
    }
    
    /* Extra small screens handling */
    @media (max-width: 400px) {
        .page-wrapper {
            padding: 3px;
        }
        
        .cart-left, .cart-right {
            padding: 10px;
        }
        
        .product-info {
            gap: 6px;
        }
        
        .product-info img {
            width: 40px;
            height: 40px;
        }
        
        .product-info h4 {
            font-size: 0.8rem;
        }
        
        .product-info .desc {
            font-size: 0.75rem;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            white-space: normal;
        }
        
        .quantity-controls input {
            width: 35px;
            height: 25px;
            font-size: 0.8rem;
        }
        
        td:nth-child(3)::before, td:nth-child(4)::before {
            font-size: 0.8rem;
        }
        
        .save-btn, .checkout-btn {
            padding: 8px;
            font-size: 0.85rem;
        }
        
        #prodNameXprice {
            max-height: 180px;
        }
        
        .summary-item {
            padding: 6px 0;
        }
        
        .total-price {
            font-size: 0.8rem;
        }

        .zbritja {
            font-size: 0.75rem;
        }
        
        .empty-cart, .empty-cart-summary {
            font-size: 0.85rem;
            padding: 20px 10px;
        }
    }

    @media (max-width: 360px) {
        .itemsTable table tbody tr td:first-child {
            width: 40%;
        }

        .itemsTable table tbody tr td:nth-child(2) {
            width: 35%;
        }

        .itemsTable table tbody tr td:nth-child(3) {
            width: 10%;
        }

        .itemsTable table tbody tr td:nth-child(4) {
            width: 15%;
        }
    }
</style>