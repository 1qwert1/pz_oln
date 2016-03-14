<?php include 'header_contr.php' ?>

<ol class="center_ol">
    <li>Предмет договору.
        <ol class="left_ol">
            <li>Постачальник зобов’язується поставити: "<?php echo $_POST[nett] ?>", в подальшому – Товар,
                Замовнику, а Замовник зобов’язується прийняти цей товар та своєчасно його оплатити на умовах даного
                договору в асортименті, кількості та по ціні, які вказані в прайс листі або в Специфікації, підписаній
                представниками обох Сторін, яка є невід'ємною частиною цього Договору.
            </li>
            <li>Право власності на товар переходить від Постачальника до Замовника з моменту підписання представниками
                Сторін накладної, яка засвідчує момент передачі товару.
            </li>
        </ol>
    </li>
    <li>Ціна, асортимент та умови поставки товару.
        <ol class="left_ol">
            <li>Ціна на товар встановлюється відповідно з діючим прайс-листом Постачальника або вказується в
                Специфікації. В випадку відсутності специфікації ціна, кількість та асортимент конкретної партії товару
                погоджується в відповідній накладній, яка має силу протоколу узгодження ціни. Ціни на товар по данному
                договору встановлюються на рівні звичайних цін діючих на момент поставки товару в порівняльних умовах.
            </li>
            <li>Загальна сума Договору складає <?php echo $_POST[price] ?>грн. без ПДВ та визначається вартістю товару
                протягом дії цього Договору згідно видаткових
                накладних які оформлені Сторонами на протязі дії цьго договору.
            </li>
            <li>В разі зміни ціни на товар чи асортименту, що зазначені в прас листі,або Специфікації Постачальник
                зобов’язаний повідомити про це Замовника не пізніше, ніж за 7 календарних днів до введення в дію нових цін
                чи змін в асортименті.
            </li>
            <li>Асортимент на конкретну поставку товару, кількість та дату поставки товару визначається Замовленням
                Замовника, яке він складає на підставі прайс листа або Специфікації. Замовлення направляється
                Постачальнику електронною поштою, телефонограмою, факсом чи особисто, на розсуд Замовника, яке передається
                Постачальнику не пізніше, ніж за 14 (чотирнадцять) банківських днів до строку виконання замовлення.
                Постачальник зобов’язаний здійснити поставку партії Товару не пізніше 14 (чотирнадцяти) банківських днів
                з дати виставлення рахунку.
            </li>
            <li>Якщо після отримання замовлення, до кінця робочого дня (18:00), Постачальник не повідомив Замовника про
                неможливість повністю або частково виконати Замовлення, останнє вважається прийнятим в повному обсязі на
                умовах вказаних в замовленні.
            </li>
            <li>Поставка товару здійснюється за рахунок та силами Постачальника за адресою вказаною Замовником у
                Замовленні.
            </li>
            <li>При передачі товару Постачальник зобов’язаний передати всю, належним чином оформлену документацію на
                товар, а Замовник зобов’язаний прийняти, підписати та передати документацію Постачальнику. Замовник несе
                повну відповідальність за негативні наслідки, спричинені ненаданням вищезазначених документів або їх
                неналежним оформленням.
            </li>
            <li>Ціна на товар, що постачається, встановлюється в гривнях.
            </li>
        </ol>
    </li>
    <li>Якість товару та умови прийому-передачі.
        <ol class="left_ol">
            <li>Якість товару повинна бути підтверджена гігієнічними висновками, сертифікатами або іншими документами,
                які необхідні для продажу товару згідно чинних Правил торгівлі, санітарно-епідеміологічного
                законодавства України та законодавства про захист прав споживачів. В момент передачі товарів, згідно
                замовлення, Постачальник повинен надати у розпорядження Замовника відповідним чином оформлені документи.
            </li>
            <li>Прийом-передача товару проводиться уповноваженими представниками сторін у відповідності з вимогами
                Інструкцій про порядок приймання продукції виробничо-технічного призначення і товарів народного
                споживання за кількістю та якістю №№ П-6, П-7.
            </li>
            <li>Прийом товару за кількістю проводиться:
                <ol>
                    <li>за кількістю в момент отримання товару Замовником;</li>
                    <li>за метражем одночасно з розкриттям тари, не пізніше 10 днів з моменту отримання товару.</li>
                </ol>
            </li>
            <li>Претензії по якості товару приймаються:
                <ol>
                    <li>при відвантажені товару відрізами чи штуками – не пізніше 5 робочих днів ;
                        при відвантажені товару роликами – не пізніше 14 робочих днів,
                    </li>
                    <li>акт про скриті недоліки товару повинен бути складений протягом 5 календарних днів з дня
                        виявлення цих недоліків.
                        <br>Претензії по якості товару приймаються до розгляду після надання Замовником бракованого товару
                        (для меблевої тканини у не розкроєному вигляді) з актом про повернення, ксерокопією накладної
                        Постачальника та при наданні бірки зі штрих-кодом з бракованого рулону або відрізу, а також з
                        виділеними дефектами товару.
                        <br>При виявленні неякісних товарів Замовник має право відмовитись від прийняття такого товару,
                        при цьому складається відповідний акт, який підписується представниками Сторін.
                    </li>
                </ol>
            </li>
            <li>Строк гарантії на товар складає 18 місяців.
            </li>
            <li>При появі спірних питань з причин виникнення недоліків (дефектів), товар відправляється на експертизу.
                Витрати на експертизу сплачує та сторона, порушення нормативних вимог експлуатації, зберігання тощо,
                якої буде встановлено експертом.
            </li>
        </ol>
    </li>
    <li>Порядок розрахунків.
        <ol class="left_ol">
            <li>Оплата за кожну партію товару здійснюється протягом 3 (трьох) банківських днів з моменту виставлення
                рахунку Постачальником.
            </li>
        </ol>
    </li>
    <li>Обов’язки сторін.
        <ol class="left_ol">
            <li>Постачальник зобов’язаний:
                <ol>
                    <li>Здійснювати своєчасну поставку товару;</li>
                    <li>Здійснювати заміну неякісного товару або усунення недоліків протягом 21 дня з моменту отримання
                        повідомлення Замовника з документами, оформленими в порядку та строки згідно з розділом № 3 цього
                        Договору.
                    </li>
                </ol>
            </li>
            <li>Замовник зобов’язаний:
                <ol>
                    <li>Приймати товар;</li>
                    <li>Здійснювати оплату за товар згідно п. 4.1. цього Договору;</li>
                    <li>За підсумками кожного місяця Постачальником надаються Замовнику акти звірки взаєморозрахунків.
                        Замовник забов’язаний підписати акт звірки взаєморозрахунків протягом 10 робочих днів
                        за моменту його отримання. В разі, якщо Постачальник в вищезазначений термін не отримає
                        підписаний акт звірки взаєморозрахунків або мотивовані зауваження на нього- акт вважається
                        погодженим Замовником, а суми розрахунків- підтвердженними.
                    </li>
                </ol>
            </li>
        </ol>
    </li>
    <li>Відповідальність сторін.
        <ol class="left_ol">
            <li>При порушенні умов цього Договору Сторони несуть відповідальність, передбачену цим Договором, а у
                випадках не передбачених Договором згідно чинного законодавства України.
            </li>
            <li>В разі порушення терміну оплати вартості поставленого товару, що встановлений пунктом 4.1. цього
                Договору, Постачальник має право стягнути з Замовника пеню в розмірі 5% від простроченої суми платежу за
                кожен день прострочки. В разі, якщо прострочка по оплаті триватиме більше 5 (п’яти) днів Постачальник
                має право припинити поставку Товару до повного розрахунку Замовником за поставлений Товар.
            </li>
            <li>В разі порушення строку передачі товару відповідно до умов цього Договору, Замовник має право стягнути з
                Постачальника штраф у розмірі 5% від вартості непоставленого Товару. У випадку прострочки поставки
                Товару більше 30 (тридцяти) календарних днів, Замовник має право достроково розірвати Договір і вимагати
                додаткової сплати штрафу від Постачальника у розмірі 5% від вартості непоставленого товару.
            </li>
        </ol>
    </li>
    <li>Строк дії договору.
        <ol class="left_ol">
            <li>Цей Договір набуває чинності з моменту його підписання сторонами і діє до 31 грудня 2020 р.</li>
            <li>Зміни, доповнення умов або пролонгація (продовження) даного договору вступають в дію з момента
                підписання додаткової угоди між Постачальником і Замовником. Кожна із Сторін має право розірвати цей
                Договір в односторонньому порядку у випадку порушення однією із Сторін своїх зобов’язань за цим
                Договором, письмово повідомивши про розірвання Договору другу Сторону не менше ніж за 30 календарних
                днів до дати розірвання Договору. При односторонньому розірванні Договору зобов’язання за Договором
                припиняються належним виконанням Сторонами своїх зобов’язань по ньому.
            </li>
        </ol>
    </li>
    <li>Обставини непереборної сили.
        <ol class="left_ol">
            <li>Перебіг терміну виконання Сторонами зобов’язань за даним Договором може бути призупинено тільки в разі
                настання обставин непереборної сили, а саме: пожежі, стихійного лиха, збройного конфлікту, перекриття
                шляхів руху транспорту внаслідок обставин, які перебувають поза контролем сторін.
            </li>
        </ol>
    </li>
    <li>Розв”язання спорів.
        <ol class="left_ol">
            <li>У випадках не передбачених даним Договором, Сторони керуються чинним законодавством України.</li>
            <li>Усі спори між Сторонами, з яких не було досягнуто згоди, розв’язуються у відповідності з чинним
                законодавством України у Господарському суді.
            </li>
        </ol>
    </li>
    <li>Зміни та доповнення до даного Договору.
        <ol class="left_ol">
            <li>Будь які зміни та доповнення до цього Договору чинні лише при умові, якщо вони виконані в письмовій
                формі та підписані обома Сторонами.
            </li>
        </ol>
    </li>
    <li>Інші умови
        <ol class="left_ol">
            <li>Замовник є <?php
                if ($_POST[platn_prib_1]) {
                    echo 'платником податку на
        прибуток';
                } else echo 'платником єдиного податку'

                ?> згідно чинного законодавства.
            </li>
            <li>Постачальник є <?php
                if ($_POST[platn_prib_2]) {
                    echo 'платником податку на
        прибуток';
                } else echo 'платником єдиного податку'

                ?> згідно чинного законодавства.
            </li>
        </ol>
    </li>
    <li>Заключні положення.
        <ol class="left_ol">
            <li>Даний договір складено у двох примірниках, по одному для кожної з сторін.</li>
            <li>Всі додатки до Договору є невід’ємними частинами цього Договору і повинні містити посилання на реквізити
                цього Договору.
            </li>
            <li>При зміні банківських реквізитів, юридичної адреси, назви сторін, Сторони зобов’язані не пізніше 3-х
                робочих днів повідомити про таку зміну одна одну.
            </li>
            <li>При укладанні Договору Замовник зобов’язаний надати копії: Свідоцтва про державну реєстрацію, довідки
                про включення до ЄДРПОУ, свідоцтва про реєстрацію платника податку на додану вартість.
            </li>
        </ol>
    </li>
    <li>Юридичні адреси, банківські реквізити і підписи сторін</li>
</ol>


<?php include 'footer_contr.php' ?>