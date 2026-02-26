// 料金合計計算
function calculateTotal() {
  const selects = document.querySelectorAll(".simulation-form select");
  let total = 0;

  selects.forEach(select => {
    total += parseInt(select.value);
  });

  document.getElementById("totalPrice").textContent =
    total.toLocaleString() + " 円";
}
// セレクト変更時に自動計算
document.querySelectorAll(".simulation-form select").forEach(select => {
  select.addEventListener("change", calculateTotal);
});

// 申し込みフォーム
const toggle = document.getElementById("applyToggle");
const form = document.getElementById("applyForm");
toggle.addEventListener("click", () => {
  form.style.display =
    form.style.display === "block" ? "none" : "block";
});