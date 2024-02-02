<script>
    One.onLoad(() =>
        class {
            static initCharts() {
                (Chart.defaults.color = "#818d96"),
                (Chart.defaults.scale.grid.lineWidth = 0),
                (Chart.defaults.scale.beginAtZero = !0),
                (Chart.defaults.datasets.bar.maxBarThickness = 45),
                (Chart.defaults.elements.bar.borderRadius = 4),
                (Chart.defaults.elements.bar.borderSkipped = !1),
                (Chart.defaults.elements.point.radius = 0),
                (Chart.defaults.elements.point.hoverRadius = 0),
                (Chart.defaults.plugins.tooltip.radius = 3),
                (Chart.defaults.plugins.legend.labels.boxWidth = 10);
                let r,
                    a,
                    o,
                    t,
                    e = document.getElementById("js-chartjs-earnings"),
                    l = document.getElementById("js-chartjs-total-orders"),
                    n = document.getElementById("js-chartjs-total-earnings");
                // s = document.getElementById("js-chartjs-new-customers");

                null !== l &&
                    (a = new Chart(l, {
                        type: "line",
                        data: {
                            labels: [
                                @foreach ($phtable as $phst)
                                    "{{ $phst->deskripsi }}",
                                @endforeach
                            ],
                            datasets: [{
                                label: "Total Orders",
                                fill: !0,
                                backgroundColor: "rgba(220, 38, 38, .15)",
                                borderColor: "transparent",
                                pointBackgroundColor: "rgba(220, 38, 38, 1)",
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgba(220, 38, 38, 1)",
                                data: [
                                    @foreach ($phtable as $phgr)
                                        {{ $phgr->phair }},
                                    @endforeach

                                ],
                            }, ],
                        },
                        options: {
                            animation:0,
                            // maintainAspectRatio: !1,
                            tension: 0.4,
                            scales: {
                                x: {
                                    display: !1
                                },
                                y: {
                                    display: !1
                                }
                            },
                            interaction: {
                                intersect: !1
                            },
                            plugins: {
                                legend: {
                                    display: !1
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(r) {
                                            return " " + r.parsed.y + " PH Air";
                                        },
                                    },
                                },
                            },
                        },
                    })),
                    null !== n &&
                    (o = new Chart(n, {
                        type: "line",
                        data: {
                            labels: [
                                @foreach ($shtable as $shdesk)
                                    "{{ $shdesk->deskripsi }}",
                                @endforeach
                            ],
                            datasets: [{
                                label: "Total Earnings",
                                fill: !0,
                                backgroundColor: "rgba(101, 163, 13, .15)",
                                borderColor: "transparent",
                                pointBackgroundColor: "rgba(101, 163, 13, 1)",
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgba(101, 163, 13, 1)",
                                data: [
                                    @foreach ($shtable as $shgraphic)
                                        {{ $shgraphic->suhu }},
                                    @endforeach
                                ],
                            }, ],
                        },
                        options: {
                            animation:0,
                            // maintainAspectRatio: !1,
                            tension: 0.4,
                            scales: {
                                x: {
                                    display: !1
                                },
                                y: {
                                    display: !1
                                }
                            },
                            interaction: {
                                intersect: !1
                            },
                            plugins: {
                                legend: {
                                    display: !1
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(r) {
                                            return " " + r.parsed.y + " Cel";
                                        },
                                    },
                                },
                            },
                        },
                    }));
            }
            static init() {
                this.initCharts();
            }
        }.init()
    );
</script>
