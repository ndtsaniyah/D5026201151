<!DOCTYPE html>
<html>

<body>

    <h2>JavaScript For Dot Product</h2>

    <p> hasil dotproduct [3, -5, 4] x [2, 6, 5]</p>

    <script>
        let n = 3;
        const dotproduct = (vect_a, vect_b) => {
            let product = 0;

            for(let i = 0; i < n; i++){
                product = product + vect_a[i] * vect_b[i];
            }
            return product;
        }
        let vecta = [3, -5, 4];
        let vectb = [2, 6, 5];

        let hasil = dotproduct(vecta,vectb);
        alert(`Dot product: ${hasil}`);
    </script>

</body>

</html>
