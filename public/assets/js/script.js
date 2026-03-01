const copyToClipboard = async (value, element) => {
    if (!value || element.dataset.isCopied === "true") return;

    console.log(`value: ${value}`);
    element.dataset.isCopied = "true";


    const originalIcon = element.innerHTML;
    element.innerHTML = '<i class="fa-solid fa-check"></i>';
    
    // Prevent spam clicking copy by setting timeout every 3s
    setTimeout(() => {
        element.innerHTML = originalIcon;
        delete element.dataset.isCopied;
    }, 3000);
}