<?php
/**
 * Created by PhpStorm.
 * User: sharkov
 * Date: 17.05.19
 * Time: 23:06
 */

namespace App;


class Constants
{
    const positions = [
        "manager" => "Manager",
        "administrator" => "Administrator",
        "employer" => "Employer",
        "profit_employer" => "Profit Employer",
        "expense_employer" => "Expense Employer",
        "office_secretary" => "Office Secretary"
        ];
    const permissions = [
        "view_profits" => "View profits",
        "add_profits" => "Add profits",
        "edit_profits" => "Edit profits",
        "print_profits" => "Print profits",
        "remove_profits" => "Remove profits",
        "view_expenses" => "View expenses",
        "add_expenses" => "Add expenses",
        "edit_expenses" => "Edit expenses",
        "print_expenses" => "Print expenses",
        "remove_expenses" => "Remove expenses",
        "view_clients" => "View clients",
        "add_clients" => "Add clients",
        "edit_clients" => "Edit clients",
        "remove_clients" => "Remove clients",
        "view_timeline" => "View timeline",
        "view_settings" => "View settings",
        "view_support" => "View support",
        "send_support_request" => "Send support request"
    ];
    const priorities = [
        "1" => "Danger",
        "2" => "High",
        "3" => "Medium",
        "4" => "Low"
    ];
    const iconsByPriority = [
        "1" => "danger",
        "2" => "warning",
        "3" => "success",
        "4" => "info"
    ];
}