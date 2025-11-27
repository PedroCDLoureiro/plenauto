document.addEventListener("DOMContentLoaded", function () {
    function mask(o, f) {
        setTimeout(() => {
            o.value = f(o.value);
        }, 1);
    }

    // --------------------------
    // MÁSCARA DE CNPJ
    // --------------------------
    function mCNPJ(v) {
        v = v.replace(/\D/g, "");
        v = v.replace(/^(\d{2})(\d)/, "$1.$2");
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
        v = v.replace(/\.(\d{3})(\d)/, ".$1/$2");
        v = v.replace(/(\d{4})(\d)/, "$1-$2");
        return v;
    }

    // --------------------------
    // MÁSCARA DE TELEFONE FIXO / CELULAR
    // --------------------------
    function mTel(v) {
        v = v.replace(/\D/g, "");

        if (v.length > 10) {
            // Celular: (xx) xxxxx-xxxx
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
            v = v.replace(/(\d{5})(\d)/, "$1-$2");
        } else {
            // Fixo: (xx) xxxx-xxxx
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
            v = v.replace(/(\d{4})(\d)/, "$1-$2");
        }

        return v;
    }

    const cnpj = document.getElementById("cnpj");
    const telefone = document.getElementById("telefone");

    if (cnpj) {
        cnpj.addEventListener("keyup", () => mask(cnpj, mCNPJ));
    }

    if (telefone) {
        telefone.addEventListener("keyup", () => mask(telefone, mTel));
    }
});
