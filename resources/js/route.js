import Dashboard from "./components/Dashboard.vue";
import Account from "./pages/Account.vue";
import Calendar from "./pages/Calendar.vue";
import Budget from "./pages/Budget.vue";
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
        path: "/dashboard",
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
        component: Account,
    },
    {
        path: "/budgets",
        name: "admin.budget",
        component: Budget,
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
