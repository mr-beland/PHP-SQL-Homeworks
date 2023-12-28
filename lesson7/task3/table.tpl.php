<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <!-- 1 Цикл - foreach, который перебирает Элементы 1 Строки Массива $mass -->
            <!-- Используется для создания Заголовков Столбцов в Таблице. -->
                <?php foreach ($mass[0] as $key => $value): ?>
                <th scope="col" class="px-6 py-3">
            <!-- Ячейка Заголовка Столбца. -->
                    <?= $key; ?>
                </th>
           <!-- Завершение Цикла foreach -->
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
        <!-- 2 Цикл - foreach, который перебирает Строки Массива -->
            <?php foreach ($mass as $row): ?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
        <!-- 3 Цикл - foreach, который перебирает Значения в текущей Строке Массива -->
                <?php foreach ($row as $key => $value): ?>
        <!-- Условие Проверки, проверяющее, является ли текущий Ключ 'Product name' -->
                <?php if ($key === 'Product name'): ?>
        <!-- Если Условие выполняется (Ключ является 'Product name'), то выполняется Код ниже -->
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $value; ?>
                </th>
                <?php else: ?>
        <!-- Если Условие не выполняется (Ключ не является 'Product name'), то выполняется Код ниже -->
                <td class="px-6 py-4">
                    <?= $value; ?>
                </td>
        <!-- Завершение Условия -->
                <?php endif; ?>
        <!-- Завершение 3 Цикла - foreach -->
                <?php endforeach; ?>
            </tr>
        <!-- Завершение 2 Цикла - foreach -->
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

