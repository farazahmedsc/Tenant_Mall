// var colors = ["#f1556c"]; (dataColors = $("#total-revenue").data("colors")) && (colors = dataColors.split(",")); var options = { series: [62], chart: { height: 242, type: "radialBar" }, plotOptions: { radialBar: { hollow: { size: "65%" } } }, colors: colors, labels: ["Rent Collected"] }; (chart = new ApexCharts(document.querySelector("#total-revenue"), options)).render(); var dataColors; colors = ["#1abc9c", "#4a81d4"]; (dataColors = $("#sales-analytics").data("colors")) && (colors = dataColors.split(",")); var chart; options = { series: [{ name: "Revenue", type: "column", data: [414, 671, 227, 413, 201, 352, 752, 320, 257, 160] }, { name: "Expense", type: "line", data: [35, 27, 43, 22, 17, 31, 22, 22, 12, 16] }], chart: { height: 378, type: "line", offsetY: 10 }, stroke: { width: [2, 3] }, plotOptions: { bar: { columnWidth: "50%" } }, colors: colors, dataLabels: { enabled: !0, enabledOnSeries: [1] }, labels: ["Mar 2021", "Apr 2021", "May 2021", "Jun 2021", "Jul 2021", "Aug 2021", "Sep 2021", "Oct 2021", "Nov 2021", "Dec 2021"], xaxis: { type: "datetime" }, legend: { offsetY: 7 }, grid: { padding: { bottom: 20 } }, fill: { type: "gradient", gradient: { shade: "light", type: "horizontal", shadeIntensity: .25, gradientToColors: void 0, inverseColors: !0, opacityFrom: .75, opacityTo: .75, stops: [0, 0, 0] } }, yaxis: [{ title: { text: "Net Revenue" } }, { opposite: !0, title: { text: "Amount of Expenses" } }] }; (chart = new ApexCharts(document.querySelector("#sales-analytics"), options)).render(), $("#dash-daterange").flatpickr({ altInput: !0, mode: "range", altFormat: "F j, y", defaultDate: "today" });


// var colors = ["#f1556c"];
// (dataColors = $("#total-revenue").data("colors")) && (colors = dataColors.split(","));
// var options = {
//     series: [62],
//     chart: {
//         height: 242,
//         type: "radialBar"
//     },
//     plotOptions: {
//         radialBar: {
//             hollow: {
//                 size: "65%"
//             }
//         }
//     },
//     colors: colors,
//     labels: ["Rent Collected"]
// };
// (chart = new ApexCharts(document.querySelector("#total-revenue"), options)).render();
// var dataColors;
// colors = ["#1abc9c", "#4a81d4"];
// (dataColors = $("#sales-analytics").data("colors")) && (colors = dataColors.split(","));
// var chart;
// options = {
//     series: [{
//         name: "Revenue",
//         type: "column",
//         data: [414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
//     }, {
//         name: "Expense",
//         type: "line",
//         data: [35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
//     }],
//     chart: {
//         height: 378,
//         type: "line",
//         offsetY: 10
//     },
//     stroke: {
//         width: [2, 3]
//     },
//     plotOptions: {
//         bar: {
//             columnWidth: "50%"
//         }
//     },
//     colors: colors,
//     dataLabels: {
//         enabled: !0,
//         enabledOnSeries: [1]
//     },
//     labels: ["Mar 2021", "Apr 2021", "May 2021", "Jun 2021", "Jul 2021", "Aug 2021", "Sep 2021", "Oct 2021", "Nov 2021", "Dec 2021"],
//     xaxis: {
//         type: "datetime"
//     },
//     legend: {
//         offsetY: 7
//     },
//     grid: {
//         padding: {
//             bottom: 20
//         }
//     },
//     fill: {
//         type: "gradient",
//         gradient: {
//             shade: "light",
//             type: "horizontal",
//             shadeIntensity: .25,
//             gradientToColors: void 0,
//             inverseColors: !0,
//             opacityFrom: .75,
//             opacityTo: .75,
//             stops: [0, 0, 0]
//         }
//     },
//     yaxis: [{
//         title: {
//             text: "Net Revenue"
//         }
//     }, {
//         opposite: !0,
//         title: {
//             text: "Amount of Expenses"
//         }
//     }]
// };
// (chart = new ApexCharts(document.querySelector("#sales-analytics"), options)).render(), $("#dash-daterange").flatpickr({
//     altInput: !0,
//     mode: "range",
//     altFormat: "F j, y",
//     defaultDate: "today"
// });