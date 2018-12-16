#!/usr/bin/env python3

import argparse
import pandas as pd

parser = argparse.ArgumentParser()
parser.add_argument('files', type=str, nargs='+')
parser.add_argument('--output', '-o', type=str, default='data.csv')
parser.add_argument('--pickle', '-p', type=str, default='data.pkl')
args = parser.parse_args()

frames = []

for filename in args.files:
    print('Processing: ', filename)
    with open(filename, 'r') as f:
        df = pd.read_html(f, skiprows=2, index_col=0,
                attrs={'class' : 'forecast daily-archive'},
                na_values=['-'], flavor=['html5lib'])[0]

    frames.append(df)

result = pd.concat(frames)

l = [('Wind', '02:00'), ('Wind', '05:00'), ('Wind', '08:00'), ('Wind', '11:00'),
    ('Wind', '14:00'), ('Wind', '17:00'), ('Wind', '20:00'), ('Wind', '23:00'),
    ('Wave', '02:00'), ('Wave', '05:00'), ('Wave', '08:00'), ('Wave', '11:00'),
    ('Wave', '14:00'), ('Wave', '17:00'), ('Wave', '20:00'), ('Wave', '23:00')]

result.columns = pd.MultiIndex.from_tuples(l)
result = result.stack()
result.index = pd.to_datetime(
        result.index.map(lambda x: '{} {}'.format(x[0], x[1])))
result.index.name = 'Time Stamp'

print(result)
print(result.describe())

result.to_csv(args.output)
result.to_pickle(args.pickle)
