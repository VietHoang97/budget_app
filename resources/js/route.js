import Dashboard from "./components/Dashboard.vue";
import Account from "./pages/Accounts/account.vue";
import AccountIndex from "./pages/Accounts/accountIndex.vue";
import accountForm from "./pages/Accounts/accountForm.vue";
import Calendar from "./pages/Calendar.vue";
import budgetIndex from "./pages/Budgets/budgetIndex.vue";
import Budget from "./pages/Budgets/budget.vue";
import createBudget from "./pages/Budgets/create.vue";
import editBudget from "./pages/Budgets/edit.vue";
import CategoryChart from "./pages/Charts/CategoryChart.vue";
import ForecastChart from "./pages/Charts/ForecastChart.vue";
import FutureTimeChart from "./pages/Charts/FutureTimeChart.vue";
import TimeChart from "./pages/Charts/TimeChart.vue";
import CreditCard from "./pages/CreditCard.vue";
import ExportCSV from "./pages/DataTranfer/ExportCSV.vue";
import ExportPDF from "./pages/DataTranfer/ExportPDF.vue";
import Import from "./pages/DataTranfer/Import.vue";
import Debts from "./pages/Debts.vue";
import CategoriesManagement from "./pages/Preferences/CategoriesManagement.vue";
import TransactionManagement from "./pages/Preferences/TransactionManagement.vue";
import Scheduled from "./pages/ScheduledTransactions.vue";
import Setting from "./pages/Setting.vue";
import Transactions from "./pages/Transactions.vue";

export default [
    {
        path: "/",
        name: "admin.dashboard",
        component: Dashboard,
    },
    {
        path: "/transactions",
        name: "admin.transactions",
        component: Transactions,
    },
    {
        path: "/accounts",
        name: "admin.account",
        component: AccountIndex,
        children: [
            {
                path: "",
                name: "account.index",
                component: Account,
            },
            {
                path: "create",
                name: "account.create",
                component: accountForm,
            },
            {
                path: "update/:id",
                name: "account.update",
                component: accountForm,
            },
            // {
            //     path: "/transfer/:id",
            //     name: "account.transfer",
            //     // component: TransferAccount,
            // },
        ],
    },
    {
        path: "/budgets",
        name: "admin.budget",
        component: budgetIndex,
        children: [
            {
                path: "",
                name: "budget.index",
                component: Budget,
            },
            {
                path: "create",
                name: "budget.create",
                component: createBudget,
            },
            {
                path: "update/:id",
                name: "budget.update",
                component: editBudget,
            },
        ],
    },
    {
        path: "/calendar",
        name: "admin.calendar",
        component: Calendar,
    },
    {
        path: "/charts/categories",
        name: "admin.charts.category",
        component: CategoryChart,
    },
    {
        path: "/charts/time",
        name: "admin.charts.time",
        component: TimeChart,
    },
    {
        path: "/charts/future",
        name: "admin.charts.future",
        component: FutureTimeChart,
    },
    {
        path: "/charts/forecast",
        name: "admin.charts.forecast",
        component: ForecastChart,
    },
    {
        path: "/credit",
        name: "admin.credit",
        component: CreditCard,
    },
    {
        path: "/tools/csv/exportCSV",
        name: "tools.csv.exportCSV",
        component: ExportCSV,
    },
    {
        path: "/tools/csv/ExportPDF",
        name: "tools.csv.ExportPDF",
        component: ExportPDF,
    },
    {
        path: "/tools/import",
        name: "tools.import",
        component: Import,
    },
    {
        path: "/debts",
        name: "admin.debts",
        component: Debts,
    },
    {
        path: "/pref/categories",
        name: "admin.preferences.Categories",
        component: CategoriesManagement,
    },
    {
        path: "/pref/transactions",
        name: "admin.preferences.transactions",
        component: TransactionManagement,
    },
    {
        path: "/scheduled",
        name: "admin.scheduled",
        component: Scheduled,
    },
    {
        path: "/setting",
        name: "admin.Sstting",
        component: Setting,
    },
];
